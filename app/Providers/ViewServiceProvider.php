<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('*', function ($view) {

            $categories = Category::with('subCategories')
                ->where('category_status',1)
                ->get();

            $view->with('headerCategories', $categories);

        });
    }
}
