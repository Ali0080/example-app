<?php

namespace App\Providers;


use App\Models\Category;
use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades;
use Illuminate\View\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('categories', Category::all());
    }
}
