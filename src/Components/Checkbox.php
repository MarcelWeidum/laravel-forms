<?php

namespace Noardcode\Forms\Components;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;
use Noardcode\Forms\Traits\HasTranslations;

class Checkbox extends Component
{
    use HasTranslations;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var array
     */
    private array $options;

    /**
     * @var string|null
     */
    private ?string $value;

    /**
     * @var string|null
     */
    private ?string $id;

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @param  array  $options
     * @param  string|null  $value
     * @param  string|null  $id
     */
    public function __construct(string $name, array $options, $value, ?string $id)
    {
        $this->name = $name;
        $this->options = $options;
        $this->value = $value;
        $this->id = $id;
    }

    /**
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function render(): Renderable
    {
        return view('noardcode::checkbox')
            ->with('name', $this->name)
            ->with('options', $this->options)
            ->with('value', $this->value)
            ->with('id', $this->id);
    }
}
