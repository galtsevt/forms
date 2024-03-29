<div class="mb-3">
    <label class="form-label fw-bold" for="{{ $id ?? 'input-'. $name }}">{{ $labelName ?? '' }}:</label>
    <select class="form-select @error($name) is-invalid @enderror"
            name="{{ $name ?? '' }}" id="{{ $id ?? 'input-'. $name }}"
    >
        <option value="" selected>Не выбрано</option>
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
