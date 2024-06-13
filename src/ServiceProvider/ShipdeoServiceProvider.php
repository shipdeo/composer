<?php

namespace Shipdeo\ServiceProvider;

use Illuminate\Support\ServiceProvider;

class ShipdeoServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('shipdeo', function () {
            return new \Shipdeo\Shipdeo();
        });

        $this->app->singleton('shipdeo.auth', function () {
            return new \Shipdeo\Services\AuthService();
        });
    }

    public function boot()
    {
        // Publish configuration
        $this->publishes([
            __DIR__.'/../config/shipdeo.php' => config_path('shipdeo.php'),
        ]);
    }
}
