<?php

namespace Raorsa\TemporaryScriptFiles;

use Illuminate\Support\ServiceProvider;

class TemporaryScriptFilesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('temporary-script-files.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'temporary-script-files');

        // Register the main class to use with the facade
        $this->app->singleton('TemporaryScriptFiles', function () {
            return new Temporaryscriptfiles;
        });
    }
}
