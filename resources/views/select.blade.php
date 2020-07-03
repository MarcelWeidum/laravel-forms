<div class="form-group">
    @if($showLabel)
        <label for="{{ $id ?? ($name ?? '') }}">{{ $translate($label ?? $name) }}</label>
    @endif

    {{ Form::select($name, $options, $value, ['class' => 'form-control ' . $classes ?? null, 'id' => $id ?? ($name ?? null), 'disabled' => $disabled] +  $dataAttributes) }}

    @include("noardcode::validation-errors")
</div>
