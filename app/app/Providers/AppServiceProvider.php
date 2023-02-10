<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('category.view', function($view) {
            $categories = Category::where('parent_id', '=', null)->get();
            $allCategories = Category::pluck('title','id')->all();

            $view->with('categories', compact('categories','allCategories'));
        });
    }
}
