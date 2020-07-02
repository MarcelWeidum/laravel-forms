<div class="form-group">
    @if($showLabel)
        <label for="{{ $id ?? ($name ?? '') }}">{{ __('fields.' . $label) }}</label>
    @endif
    <div class="input-group">
        @if(!empty($prepend))
            <div class="input-group-prepend">
                <span class="input-group-text" id="prepend-{{ $name }}">
                    {{ $prepend }}
                </span>
            </div>
        @endif
        {{ Form::text($name, $value, ['class' => 'form-control ' . $classes ?? null, 'id' => $id ?? ($name ?? null), 'placeholder' => $placeholder, 'disabled' => $disabled]) }}
        @if ($errors->has(Illuminate\Support\Str::dotted($name)))
            <div class="invalid-feedback d-block">
                {{ $errors->first(Illuminate\Support\Str::dotted($name)) }}
            </div>
        @endif
    </div>
</div>
