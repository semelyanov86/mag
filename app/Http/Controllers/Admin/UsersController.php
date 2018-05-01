<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Spatie\Permission\Models\Role;
use App\Http\Requests\UserEditFormRequest;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
        {
		$users = User::all();
                $roles = Role::all();
		return view('admin.users.index', compact('users', 'roles'));
        }
    public function edit($id)
    {
		$user = User::whereId($id)->firstOrFail();
		$roles = Role::all();
		$selectedRoles = $user->roles()->pluck('name')->toArray();
		return view('admin.users.edit', compact('user', 'roles', 'selectedRoles'));
    }
    public function update($id, UserEditFormRequest $request)
    {
	$user = User::whereId($id)->firstOrFail();
	$user->name = $request->get('name');
        $user->coop = $request->get('coop');
        $user->region = $request->get('region');
	$user->email = $request->get('email');
	$password = $request->get('password');
	if($password != "") {
					$user->password = Hash::make($password);
			}
	$user->save();
	$user->syncRoles($request->get('role'));
	return redirect(action('Admin\UsersController@edit', $user->id))->with('status', 'Данные о пользователе обновлены!');
    }
    public function destroy($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->action('Admin\UserController@index');
    }
}
