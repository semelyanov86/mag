<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index');
Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');
Route::get('/all', 'PagesController@all');
Route::get('/articles', 'ArticleController@index');
Route::get('/article/{slug?}', 'ArticleController@show');
Route::get('/mag/{id?}', 'PagesController@show');
Route::get('/news', 'PagesController@news');
Route::get('/news/{id?}', 'PagesController@newsshow');
Route::get('/rubrika/{id}', 'ArticleController@rubr');
Route::get("search","PagesController@search");
Route::get('/user', 'PagesController@user')->middleware('auth');
Route::post('/user', 'PagesController@userupd')->middleware('auth');
// Email confirmation 
//Route::get('/confirmation/resend', 'Auth\RegisterController@resend');
//Route::get('/confirmation/{id}/{token}', 'Auth\RegisterController@confirm');
Route::get('/confirmation/resend', 'Auth\RegisterController@resend');
Route::get('/confirmation/{id}/{token}', 'Auth\RegisterController@confirm');
Route::get('/rubricas', 'PagesController@rubricas');


Route::post('posts/{id?}/mag/edit', 'Admin\MagsController@update');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('users/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('users/register', 'Auth\RegisterController@register');
Route::get('users/logout', 'Auth\LoginController@logout');
Route::get('users/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('users/login', 'Auth\LoginController@login');

Route::group(array('prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'manager'), function () {
	Route::get('users', [ 'as' => 'admin.user.index', 'uses' => 'UsersController@index' ]);
        Route::get('/', 'AdminController@index');
        Route::get('/mags', 'MagsController@index');
        Route::get('/mag', 'MagsController@create');
        Route::post('/mag', 'MagsController@store');
        Route::get('/{id?}/mag/edit', 'MagsController@edit');
        Route::get('users/{id?}/edit', 'UsersController@edit');
        Route::post('users/{id?}/edit', 'UsersController@update');
        Route::get('articles', 'AdminController@articles');
        Route::get('articles/create', 'AdminController@create');
        Route::post('articles/create', 'AdminController@store');
        Route::get('articles/{id?}/edit', 'AdminController@edit');
        Route::post('articles/{id?}/edit', 'AdminController@update');
        Route::get('rubrika', 'RubrikaController@index');
        Route::get('rubrika/create', 'RubrikaController@create');
        Route::post('rubrika/create', 'RubrikaController@store');
        Route::get('news', 'NewsController@index');
        Route::get('news/create', 'NewsController@create');
        Route::post('news/create', 'NewsController@store');
        Route::get('news/{id?}/edit', 'NewsController@edit');
        Route::post('news/{id?}/edit', 'NewsController@update');
        Route::post('upload', 'NewsController@uploadSubmit');
        Route::post('newsfile', 'NewsController@postFile');
        Route::get('news/list', 'NewsController@index');
        Route::get('shop/create', 'ShopController@input')->name('shop.create');
        Route::post('shop', 'ShopController@save');
        Route::get('shop/{id}/edit', 'ShopController@input');
        Route::get('shop/{id}/delete', 'ShopController@destroy');
        Route::get('shops', 'ShopController@index');
        Route::get('user/{id}/delete', 'UsersController@destroy');
});