<?php

namespace Sands\Asasi\Booted;

use Illuminate\Support\ServiceProvider;

class BootedServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        app()->singleton('booted', function () {
            return new Booted();
        });
    }
}
