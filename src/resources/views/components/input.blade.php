<div class="mb-3">
    <label class="form-label fw-bold" for="{{ $id ?? 'input-'. $name }}">{{ $labelName ?? '' }}:</label>
    <input type="{{ $type ?? 'text' }}" id="{{ $id ?? 'input-'. $name }}"
           name="{{ $name ?? '' }}"
           class="form-control @error($name) is-invalid @enderror"
           placeholder="{{ $placeholder ?? '' }}"
           value="{{ $value ?? '' }}"
    >
    @error($name)
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
