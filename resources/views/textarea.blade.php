<div class="form-group">

    <label for="{{ $id ?? ($name ?? '') }}">{{ $translate($label ?? $name) }}</label>
    {{ Form::textarea($name, $value, ['class' => 'form-control ' . $classes ?? null, 'id' => $id ?? ($name ?? null), 'disabled' => $disabled]) }}
    @include("noardcode::validation-errors")
</div>
