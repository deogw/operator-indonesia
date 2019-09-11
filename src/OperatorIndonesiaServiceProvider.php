<?php

namespace Deogw\OperatorIndonesia;

use Illuminate\Support\ServiceProvider;

class OperatorIndonesiaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Register the main class to use with the facade
        $this->app->singleton('operatorindonesia', function () {
            return new OperatorIndonesia;
        });
    }
}
