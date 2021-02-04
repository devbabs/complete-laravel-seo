<?php

namespace Devbabs\LaravelSEO;

use Illuminate\Support\ServiceProvider;

class LaravelSEOServiceProvider extends ServiceProvider
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
        $this->loadRoutesFrom(__DIR__ . "/routes.php");
    }
}
