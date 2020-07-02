<div class="form-group">
    @if($showLabel)
        <label for="{{ $id ?? ($name ?? '') }}">{{ __('fields.' . $label ?? $name) }}</label>
    @endif

    {{ Form::select($name, $options, $value, ['class' => 'form-control ' . $classes ?? null, 'id' => $id ?? ($name ?? null), 'disabled' => $disabled] +  $dataAttributes) }}

    @if ($errors->has(Illuminate\Support\Str::dotted($name)))
        <div class="invalid-feedback d-block">
            {{ $errors->first(Illuminate\Support\Str::dotted($name)) }}
        </div>
    @endif
</div>
