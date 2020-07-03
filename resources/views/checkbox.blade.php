<div class="form-check">
    <input type="checkbox" name="{{ $name }}" id="{{ $id ?? ($name ?? '') }}"
           class="form-check-input{{ ' ' . ($classes ?? null) }}">
    <label for="{{ $id ?? ($name ?? '') }}" class="form-check-label">{{ $translate($label ?? $name) }}</label>
</div>
