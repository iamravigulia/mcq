<?php

namespace edgewizz\mcq;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class McqServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Edgewizz\Mcq\Controllers\McqController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // dd($this);
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__ . '/components', 'mcq');
        Blade::component('mcq::mcq.open', 'mcq.open');
        Blade::component('mcq::mcq.index', 'mcq.index');
        Blade::component('mcq::mcq.edit', 'mcq.edit');
    }
}
