<?php

namespace LP\Location;

use Illuminate\Support\ServiceProvider;

class LocationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
        $this->app->make('LP\Location\LocationController');

        $this->loadViewsFrom(__DIR__.'/views','location');


    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ .'/routes.php';
    }
}
