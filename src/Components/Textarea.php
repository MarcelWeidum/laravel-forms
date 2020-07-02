<?php

namespace Noardcode\Forms\Components;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;

class Textarea extends Component
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var string|null
     */
    private ?string $value;

    /**
     * @var string|null
     */
    private ?string $id;

    /**
     * @var string|null
     */
    private ?string $classes;

    /**
     * @var string|null
     */
    private ?string $label;

    /**
     * @var bool|null
     */
    private ?bool $disabled = false;

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @param  string|null  $value
     * @param  string|null  $id
     * @param  string|null  $classes
     * @param  string|null  $label
     * @param  bool|null  $disabled
     */
    public function __construct(
        string $name,
        $value = null,
        ?string $id = null,
        ?string $classes = null,
        ?string $label = null,
        ?bool $disabled = false
    ) {
        $this->name = $name;
        $this->value = $value;
        $this->id = $id;
        $this->classes = $classes;
        $this->label = (!is_null($label)) ? $label : $name;
        $this->disabled = $disabled;
    }

    /**
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function render(): Renderable
    {
        return view('noardcode::textarea')
            ->with('name', $this->name)
            ->with('value', $this->value)
            ->with('id', $this->id)
            ->with('label', $this->label)
            ->with('classes', $this->classes)
            ->with('disabled', $this->disabled);
    }
}
