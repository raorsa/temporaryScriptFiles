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
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'temporaryscriptfiles');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'temporaryscriptfiles');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('temporaryscriptfiles.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/temporaryscriptfiles'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/temporaryscriptfiles'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/temporaryscriptfiles'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'temporaryscriptfiles');

        // Register the main class to use with the facade
        $this->app->singleton('temporaryscriptfiles', function () {
            return new Temporaryscriptfiles;
        });
    }
}
