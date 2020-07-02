<?php

namespace Noardcode\Forms\Components;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;

class Text extends Component
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
    private ?string $placeholder;

    /**
     * @var string|null
     */
    private ?string $label;

    /**
     * @var bool|null
     */
    private ?bool $showLabel = true;

    /**
     * @var bool|null
     */
    private ?bool $disabled = false;

    /**
     * @var string|null
     */
    private ?string $prepend = null;

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @param  string|null  $value
     * @param  string|null  $label
     * @param  string|null  $id
     * @param  string|null  $classes
     * @param  bool|null  $showLabel
     * @param  string|null  $placeholder
     * @param  bool|null  $disabled
     * @param  string|null  $prepend
     */
    public function __construct(
        string $name,
        string $value = null,
        ?string $label = null,
        ?string $id = null,
        ?string $classes = null,
        ?bool $showLabel = true,
        ?string $placeholder = null,
        ?bool $disabled = false,
        ?string $prepend = null
    ) {
        $this->name = $name;
        $this->label = (!is_null($label)) ? $label : $name;
        $this->value = $value;
        $this->id = $id;
        $this->classes = $classes;
        $this->showLabel = $showLabel;
        $this->placeholder = $placeholder;
        $this->disabled = $disabled;
        $this->prepend = $prepend;
    }

    /**
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function render(): Renderable
    {
        return view('noardcode::text')
            ->with('name', $this->name)
            ->with('value', $this->value)
            ->with('label', $this->label)
            ->with('id', $this->id)
            ->with('showLabel', $this->showLabel)
            ->with('placeholder', $this->placeholder)
            ->with('disabled', $this->disabled)
            ->with('classes', $this->classes)
            ->with('prepend', $this->prepend);
    }
}
