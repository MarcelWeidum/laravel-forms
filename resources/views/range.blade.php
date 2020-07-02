<div class="form-group">
    @if($showLabel)
        <label for="{{ $id ?? ($name ?? '') }}">{{ __('fields.' . $label) }}</label>
    @endif
    {{ Form::selectRange($name,$min, $max, $value, ['class' => 'form-control selectpicker' . $classes ?? null, 'id' => $id ?? ($name ?? null), 'placeholder' => $placeholder, 'disabled' => $disabled, 'title' => __('noardcode::laravel-forms.Choose option')]) }}
    @if ($errors->has($name))
        <div class="invalid-feedback d-block">
            {{ $errors->first($name) }}
        </div>
    @endif
</div>
