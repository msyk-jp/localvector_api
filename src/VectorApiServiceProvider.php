<?php

namespace VectorApiClient;

use Illuminate\Support\ServiceProvider;
use VectorApiClient\Services\VectorService;

class VectorApiServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/vectorapi.php', 'vectorapi');

        $this->app->singleton(VectorService::class, fn() => new VectorService());
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/vectorapi.php' => config_path('vectorapi.php'),
        ], 'config');
    }
}
