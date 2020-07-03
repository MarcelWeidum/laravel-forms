@if ($errors->has(Illuminate\Support\Str::dotted($name)))
    <div class="invalid-feedback d-block">
        {{ $errors->first(Illuminate\Support\Str::dotted($name)) }}
    </div>
@endif
