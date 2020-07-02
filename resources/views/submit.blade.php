<div class="form-group">
    <input type="submit" name="{{ $name }}" id="{{ $id ?? ($name ?? '') }}" class="btn btn-success float-right{{ ' ' . $classes ?? null }}" value="{{ __('fields.' . $name) }}">
    <div class="clearfix"></div>
</div>
