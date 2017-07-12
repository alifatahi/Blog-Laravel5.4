<?php

namespace App\Providers;

use App\Post;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        /*
        so we simply say we want to load view sidebar and also we want to
        bind value to it which is archive
        */
        view()->composer('layouts.sidebar',function ($view){
                $view->with('archives',Post::archives());
        });
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
