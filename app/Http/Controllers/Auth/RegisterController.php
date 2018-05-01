<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
//use Illuminate\Foundation\Auth\RegistersUsers;
use Spatie\Permission\Models\Role;
use Bestmomo\LaravelEmailConfirmation\Traits\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'coop' => 'required|string|max:255',
            'region'=>'required|string|max:255',
            'captcha' => 'captcha'
        ], [
            'name.required' => 'Пожалуйста, заполните поле с вашим именем',
            'coop.required' => 'Введите наименование вашего кооператива',
            'region.required' => 'Введите местонахождение вашего кооператива',
            'email.required' => 'Поле с адресом электронной почты обязательно к заполнению',
            'captcha.captcha' => 'Введены некорректные символы',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'coop' => $data['coop'],
            'region' => $data['region'],
        ])->assignRole('3');
    }
    
    
        public function confirm($id, $confirmation_code)
    {
        $model = $this->guard()->getProvider()->createModel();
        $user = $model->whereId($id)->whereConfirmationCode($confirmation_code)->firstOrFail();
        $user->confirmation_code = null;
        $user->confirmed = true;
        $user->save();

        return redirect(route('login'))->with('confirmation-success', trans('confirmation::confirmation.success'));
    }
    /**
     * Handle a resend request
     *
     * @param  \App\Repositories\UserRepository $userRepository
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
public function resend(Request $request)
    {
        if ($request->session()->has('user_id')) {

            $model = config('auth.providers.users.model');

            $user = $model::findOrFail($request->session()->get('user_id'));
            if (empty($user->confirmation_code)) {
                $user->confirmation_code = str_random(30);
                $user->save();
            }

            $this->notifyUser($user);
            
            return redirect(route('login'))->with('confirmation-success', trans('confirmation::confirmation.resend'));
        }

        return redirect('/');
    }
}
