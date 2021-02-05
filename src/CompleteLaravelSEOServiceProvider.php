<?php

namespace Devbabs\CompleteLaravelSEO;

use Illuminate\Support\ServiceProvider;

class CompleteLaravelSEOServiceProvider extends ServiceProvider
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
