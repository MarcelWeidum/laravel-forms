<div class="form-check">
    <input type="text" name="{{ $name }}" id="{{ $id ?? ($name ?? '') }}"
           class="form-check-input{{ '' . $classes ?? null }}">
    <label for="{{ $id ?? ($name ?? '') }}" class="form-check-label">{{ __('fields.' . $name) }}</label>
</div>
