<?php

namespace Noardcode\Forms;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

/**
 * Class FormsServiceProvider
 *
 * @package Noardcode\Forms
 */
class FormsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/noardcode'),
        ], 'lang');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'noardcode');
    }

    /**
     * Register bindings in the container.
     */
    public function register()
    {
        //
    }
}
