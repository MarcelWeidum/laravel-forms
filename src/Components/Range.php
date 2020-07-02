<?php

namespace Noardcode\Forms\Components;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;

/**
 * Class Range
 *
 * @package App\View\Components\Admin\Form
 */
class Range extends Component
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var int
     */
    private int $min;

    /**
     * @var int
     */
    private int $max;

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
     * Create a new component instance.
     *
     * @param string $name
     * @param string|null $value
     * @param int $min
     * @param int $max
     * @param string|null $label
     * @param string|null $id
     * @param string|null $classes
     * @param bool|null $showLabel
     * @param string|null $placeholder
     * @param bool|null $disabled
     */
    public function __construct(
        string $name,
        string $value = null,
        int $min = 0,
        int $max = 100,
        ?string $label = null,
        ?string $id = null,
        ?string $classes = null,
        ?bool $showLabel = true,
        ?string $placeholder = null,
        ?bool $disabled = false
    ) {
        $this->name = $name;
        $this->min = $min;
        $this->max = $max;
        $this->label = (!is_null($label)) ? $label : $name;
        $this->value = $value;
        $this->id = $id;
        $this->classes = $classes;
        $this->showLabel = $showLabel;
        $this->placeholder = $placeholder;
        $this->disabled = $disabled;
    }

    /**
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function render(): Renderable
    {
        return view('noardcode::range')
            ->with('name', $this->name)
            ->with('min', $this->min)
            ->with('max', $this->max)
            ->with('value', $this->value)
            ->with('label', $this->label)
            ->with('id', $this->id)
            ->with('showLabel', $this->showLabel)
            ->with('placeholder', $this->placeholder)
            ->with('disabled', $this->disabled)
            ->with('classes', $this->classes);
    }
}
