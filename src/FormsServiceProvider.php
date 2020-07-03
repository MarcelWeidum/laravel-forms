<?php

namespace Noardcode\Forms;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Noardcode\Forms\Components\Checkbox;
use Noardcode\Forms\Components\File;
use Noardcode\Forms\Components\Range;
use Noardcode\Forms\Components\Select;
use Noardcode\Forms\Components\Submit;
use Noardcode\Forms\Components\Text;
use Noardcode\Forms\Components\Textarea;

/**
 * Class FormsServiceProvider
 *
 * @package Noardcode\Forms
 */
class FormsServiceProvider extends ServiceProvider
{
    /**
     * @var array|string[]
     */
    private array $components = [
        'checkbox' => Checkbox::class,
        'file'     => File::class,
        'range'    => Range::class,
        'select'   => Select::class,
        'submit'   => Submit::class,
        'text'     => Text::class,
        'textarea' => Textarea::class
    ];

    /**
     * Perform post-registration booting of services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/noardcode'),
        ], 'lang');

        $this->publishes([
            __DIR__.'/../config/laravel-forms.php' => config_path('laravel-forms.php'),
        ], 'config');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'noardcode');

        $this->registerComponents(config('laravel-forms.component-prefix'));

        Str::macro('dotted', function ($string) {
            $string = str_replace('[', '.', $string);
            $string = str_replace('].', '.', $string);
            $string = str_replace(']', '', $string);
            return $string;
        });
    }

    /**
     * Register bindings in the container.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-forms.php', 'laravel-forms');
    }

    /**
     * @param $prefix
     */
    private function registerComponents($prefix)
    {
        foreach ($this->components as $name => $class) {
            Blade::component("{$prefix}-{$name}", $class);
        }
    }
}
