<?php

namespace Noardcode\Forms\Components;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;
use Noardcode\Forms\Traits\HasTranslations;

class File extends Component
{
    use HasTranslations;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string|null
     */
    private ?string $preview;

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
    private ?string $label;

    /**
     * @var bool
     */
    private bool $showLabel;

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @param  string|null  $preview
     * @param  string|null  $value
     * @param  string|null  $id
     * @param  string|null  $label
     * @param  bool  $showLabel
     */
    public function __construct(
        string $name,
        ?string $preview = null,
        ?string $value = null,
        ?string $id = null,
        ?string $label = null,
        bool $showLabel = true
    ) {
        $this->name = $name;
        $this->preview = $preview;
        $this->value = $value;
        $this->id = $id;
        $this->label = (!is_null($label)) ? $label : $name;
        $this->showLabel = $showLabel;
    }

    /**
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function render(): Renderable
    {
        return view('noardcode::file')
            ->with('name', $this->name)
            ->with('preview', $this->preview)
            ->with('value', $this->value)
            ->with('label', $this->label)
            ->with('id', $this->id)
            ->with('showLabel', $this->showLabel);
    }
}
