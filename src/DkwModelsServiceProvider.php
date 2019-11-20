<?php

namespace Makkinga\DkwModels;

use Illuminate\Support\ServiceProvider;

class DkwModelsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('dkw', function ($app) {
            return new DkwModelsController($app);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
