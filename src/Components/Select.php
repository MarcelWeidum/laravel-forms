<?php

namespace Noardcode\Forms\Components;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;
use Noardcode\Forms\Traits\HasTranslations;

class Select extends Component
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
    private $value;

    /**
     * @var string|null
     */
    private ?string $id;

    /**
     * @var string|null
     */
    private ?string $classes;

    /**
     * @var array|null
     */
    private ?array $dataAttributes;

    /**
     * @var string|null
     */
    private ?string $label;

    /**
     * @var bool|null
     */
    private ?bool $showLabel;

    /**
     * @var bool|null
     */
    private ?bool $disabled;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param array $options
     * @param string|null $value
     * @param string|null $id
     * @param string|null $classes
     * @param array|null $dataAttributes
     * @param string|null $label
     * @param bool|null $showLabel
     * @param bool|null $disabled
     * @param bool|null $chooseOption
     */
    public function __construct(
        string $name,
        array $options,
        $value = null,
        ?string $id = null,
        ?string $classes = null,
        ?array $dataAttributes = [],
        ?string $label = null,
        ?bool $showLabel = true,
        ?bool $disabled = false,
        ?bool $chooseOption = false
    ) {
        if ($chooseOption) {
            $options = [null =>  __('general.Choose option')] + $options;
            $classes .= 'disable-first-option';

            if (is_null($value)) {
                $value = null;
            }
        }

        $this->name = $name;
        $this->options = $options;
        $this->value = $value;
        $this->id = $id;
        $this->classes = $classes;
        $this->dataAttributes = $dataAttributes;
        $this->label = $label;
        $this->showLabel = $showLabel;
        $this->disabled = $disabled;
    }


    /**
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function render(): Renderable
    {
        return view('noardcode::select')
            ->with('name', $this->name)
            ->with('options', $this->options)
            ->with('value', $this->value)
            ->with('id', $this->id)
            ->with('classes', $this->classes)
            ->with('label', $this->label)
            ->with('showLabel', $this->showLabel)
            ->with('disabled', $this->disabled)
            ->with('dataAttributes', $this->getDataAttributes());
    }

    /**
     * @return array
     */
    private function getDataAttributes(): array
    {
        if (empty($this->dataAttributes)) {
            return [];
        }

        $data = [];
        foreach ($this->dataAttributes as $attribute => $value) {
            if ($attribute == 'multiple') {
                $data[$attribute] = $value;
            } else {
                $data['data-' . $attribute] = $value;
            }
        }
        return $data;
    }
}
