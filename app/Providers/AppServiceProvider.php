<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Cat;
use App\Observers\CatObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Cat::observe(CatObserver::class);
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
