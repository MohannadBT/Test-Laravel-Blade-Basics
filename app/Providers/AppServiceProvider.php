<?php

namespace App\Providers;

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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $metaTitle = 'Blade Test';

        view()->composer('layouts.app', function ($view) use ($metaTitle) {
            $view->with('metaTitle', $metaTitle);
        });
    }
}