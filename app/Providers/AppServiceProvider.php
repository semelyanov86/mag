<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
//use Illuminate\Support\Facades\Auth;
use App\Rubrika;
use App\News;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    //    View::share(["user" => Auth::user(), "rubrikas" => Rubrika::all(), "news" => News::orderBy('date', 'desc')->limit(5)->get()]);
        View::share(["rubrikas" => Rubrika::all(), "news" => News::orderBy('date', 'desc')->limit(5)->get()]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
