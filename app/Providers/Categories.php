<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\App;

class Categories extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['Layouts.mainLayout', 'category'],'App\ViewComposer\CategoriesComposer' );
        View::composer(['Layouts.mainLayout'],'App\ViewComposer\BestProductComposer' );
    }
}
