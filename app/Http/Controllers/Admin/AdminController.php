<?php

namespace App\Http\Controllers\Admin;
use App\Mag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rubrika;
use App\Article;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticleFormRequest;
use App\Http\Requests\ArticleEditFormRequest;

class AdminController extends Controller
{
    public function index()
    {
        $mags = Mag::count();
        return view('admin.index', compact('mags'));
    }
    public function create()
    {
	$rubrikas = Rubrika::all();
        return view('admin.articles.create', compact('rubrikas'));
    }
    public function store(ArticleFormRequest $request)
    {
        $user_id = Auth::user()->id;
        $article = new Article(array(
            'title' => $request->get('title'),
            'author' => $request->get('author'),
            'dolz' => $request->get('dolz'),
            'short' => $request->get('short'),
            'content' => $request->get('content'),
            'no' => $request->get('no'),
            'status' => $request->get('status'),
            'image' => $request->file('image')->getClientOriginalName(),
            'date' => $request->get('date'),            
            ));
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file->move(public_path() . '/images/articles/', $name);
        }
        $article->save();
        $article->rubrikas()->sync($request->get('rubrikas'));
        return redirect('/admin/articles/create')->with('status', 'Статья успешно опубликована!');
        
    }
        public function articles()
    {
        $articles = Article::all();
        return view('admin.articles.index', compact('articles'));
    }
        public function edit($id)
    {
	$article = Article::whereid($id)->firstOrFail();
        $rubrikas = Rubrika::all();
        $selectedRubricas = $article->rubrikas->pluck('id')->toArray();
        return view('admin.articles.edit', compact('article', 'rubrikas', 'selectedRubricas'));
    }
    public function update($id, ArticleEditFormRequest $request)
    {
	$article = Article::whereid($id)->firstOrFail();
        $article->title = $request->get('title');
        $article->author = $request->get('author');
        $article->dolz = $request->get('dolz');
        $article->short = $request->get('short');
        $article->content = $request->get('content');
        $article->no = $request->get('no');
        $article->status = $request->get('status');
        $article->save();
        $article->rubrikas()->sync($request->get('rubrikas'));
        return redirect(action('Admin\AdminController@edit', $article->id))->with('status', 'Статья успешно обновлена!');
    }
}
