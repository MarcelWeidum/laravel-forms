<div class="form-group">
    @if($showLabel)
        <label for="{{ $id ?? ($name ?? '') }}">{{ __('fields.' . $label) }}</label>
    @endif
    @if(!is_null($preview))
        @if($preview !== "")
                <img class="thumbnail img-preview {{$id}}" src="/storage/{{$preview}}" title="Preview image"/>
        @endif
    @endif
    <div class="input-group mb-3">
        <div class="custom-file">
            <input type="file" type="text" name="{{ $name }}" id="{{ $id ?? ($name ?? '') }}" class="custom-file-input">
            <label class="custom-file-label" for="{{ $id ?? ($name ?? '') }}">Choose file</label>
        </div>
        @if ($errors->has(Illuminate\Support\Str::dotted($name)))
            <div class="invalid-feedback d-block">
                {{ $errors->first(Illuminate\Support\Str::dotted($name)) }}
            </div>
        @endif
    </div>
</div>
