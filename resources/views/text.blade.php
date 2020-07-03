<div class="form-group">
    @if($showLabel)
        <label for="{{ $id ?? ($name ?? '') }}">{{ $translate($label ?? $name) }}</label>
    @endif
    <div class="input-group">
        @if(!empty($prepend))
            <div class="input-group-prepend">
                <span class="input-group-text" id="prepend-{{ $name }}">
                    {{ $prepend }}
                </span>
            </div>
        @endif
        {{ Form::text($name, $value, ['class' => 'form-control' . (' ' . ($classes ?? null)), 'id' => $id ?? ($name ?? null), 'placeholder' => $placeholder, 'disabled' => $disabled]) }}
        @include("noardcode::validation-errors")
    </div>
</div>
