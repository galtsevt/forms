<div class="mb-3">
    <label class="form-label fw-bold">{{ $labelName ?? '' }}:</label>
    <input type="{{ $type ?? 'text' }}"
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
