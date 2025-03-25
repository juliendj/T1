@php
$label = $label ?? ucfirst($name);
$name = $name ?? null;
$class = $class ?? null;
$type = $type ?? 'text';
$value = $value ?? null;
@endphp

<div class="mb-3">
    <label for="example-{{ $name }}">{{ $label }}</label>

    @if($type=='textarea')
    <textarea class="form-control @error($name) is-invalid @enderror" name="{{ $name }}" id="{{ $name }}" >{{ old($name,$value)}}</textarea>

    @else
    <input class="form-control @error($name) is-invalid @enderror" type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"  value="{{ old($name,$value) }}" >
    @endif
@error($name)
<div class="invalid-feedback">{{ $message }}</div>
{{ $message }}

@enderror

</div>
