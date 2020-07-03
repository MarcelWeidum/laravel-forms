<div class="form-group">
    @if($showLabel)
        <label for="{{ $id ?? ($name ?? '') }}">{{ $translate($label ?? $name) }}</label>
    @endif
    @if(!is_null($preview) && $preview !== "")
        <img class="thumbnail img-preview {{$id}}" src="/storage/{{$preview}}" title="Preview image"/>
    @endif
    <div class="input-group mb-3">
        <div class="custom-file">
            <input type="file" type="text" name="{{ $name }}" id="{{ $id ?? ($name ?? '') }}" class="custom-file-input">
            <label class="custom-file-label" for="{{ $id ?? ($name ?? '') }}">Choose file</label>
        </div>
        @include("noardcode::validation-errors")
    </div>
</div>
