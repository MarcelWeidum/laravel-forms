<?php

namespace Noardcode\Forms\Traits;

/**
 * Trait HasTranslations
 *
 * @package Noardcode\Forms\Traits
 */
trait HasTranslations
{
    /**
     * @param  string  $value
     *
     * @return string
     */
    public function translate(string $value): string
    {
        if (config('laravel-forms.translate-labels', false)) {
            return __(config('laravel-forms.field-translations') . ".$value");
        }

        return $value;
    }
}
