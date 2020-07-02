<div class="form-group">

    <label for="{{ $id ?? ($name ?? '') }}">{{ __('fields.' . $label) }}</label>
    {{ Form::textarea($name, $value, ['class' => 'form-control ' . $classes ?? null, 'id' => $id ?? ($name ?? null), 'disabled' => $disabled]) }}
    @if ($errors->has(Illuminate\Support\Str::dotted($name)))
        <div class="invalid-feedback d-block">
            {{ $errors->first(Illuminate\Support\Str::dotted($name)) }}
        </div>
    @endif
</div>
