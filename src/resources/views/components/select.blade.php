<div class="mb-3">
    <label class="form-label fw-bold">{{ $labelName ?? '' }}:</label>
    <select class="form-select @error($name) is-invalid @enderror"
            name="{{ $name ?? '' }}"
    >
        <option selected>Не выбрано</option>
        @foreach($data as $key => $value)
            <option value="{{ $key }}" {{ $key == $selected ? 'selected':'' }}>{{ $value }}</option>
        @endforeach
    </select>

    @error($name)
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
