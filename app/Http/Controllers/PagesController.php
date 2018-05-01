<?php

namespace App\Http\Controllers;
use App\Mag;
use Illuminate\Http\Request;
use App\News;
use App\Rubrika;
use App\Article;
use App\Http\Requests\UserEditFormRequest;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $rubrikas = Rubrika::all();
    }
    
    public function index()
    {
                     
        $artf1 = Article::where("favourite", "=", "1")->limit(3)->get();
        $artf2 = Article::where("favourite", "=", "1")->offset(3)->limit(3)->get();
        $mags = Mag::orderBy('date', 'desc')->limit(5)->get();
        $artl1 = Article::latest('date')->limit(3)->get();
        $artl2 = Article::latest('date')->offset(3)->limit(3)->get();
        return view('index', compact('mags', 'artf1', 'artf2', 'artl1', 'artl2'));
    }
    
    public function all()
    {
        if (request()->has('year')){
         $mags = Mag::whereYear('date', request('year'))->paginate(12);   
        } elseif (request()->has('month')) {
         $mags = Mag::whereMonth('date', request('month'))->paginate(10);
    }   else {
        $mags = Mag::paginate(10);
        }
        return view('all', compact('mags'));
    }
    
    public function contact()
    {
       return view('contact');
    }
        
    public function about()
    {
       $mags = Mag::latest('no')->limit(1)->get();
        return view('about', compact('mags'));
    }
    
        public function rubricas()
    {
       
            return view('rubricas');
    }
    
        public function news()
    {
        $newsf = News::paginate(10);
        return view('news', compact('newsf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mag = Mag::whereid($id)->firstOrFail();
	return view('mag', compact('mag'));
    }
        public function newsshow($id)
    {
       
            $newsh = News::whereid($id)->firstOrFail();
       
	return view('newsshow', compact('newsh'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
        public function user()
    {
        return view('user');
    }
    
    public function userupd($id, UserEditFormRequest $request)
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
	return redirect('/user')->with('status', 'Данные о пользователе обновлены!');
    }
    
    public function search(Request $request)
    {
        
    if($request->has('search')){
    $articles = Article::search($request->get('search'))->get();
    }else{
    $articles = Article::get();
    }


    return view('search', compact('articles'));
    }
}
