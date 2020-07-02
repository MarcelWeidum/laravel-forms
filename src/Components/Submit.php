<?php

namespace Noardcode\Forms\Components;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;

class Submit extends Component
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var string|null
     */
    private ?string $id;

    /**
     * @var string|null
     */
    private ?string $classes;

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @param  string|null  $id
     * @param  string|null  $classes
     */
    public function __construct(string $name, ?string $id = null, ?string $classes = null)
    {
        $this->name = $name;
        $this->id = $id;
        $this->classes = $classes;
    }

    /**
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function render(): Renderable
    {
        return view('noardcode::submit')
            ->with('name', $this->name)
            ->with('id', $this->id)
            ->with('classes', $this->classes);
    }
}
