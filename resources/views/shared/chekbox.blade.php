@php
$class ??=null;

@endphp

<div @class(["form-check form-switch",$class])>
<input type='hidden' value="0" name="{{ $name }}">
<input @checked(old($name,$value ?? false)) type="checkbox" value="1" name="{{ $name }}" id="{{ $name }}" @if($value) checked @endif>
<label class="form-check-label" for="{{ $name }}">{{ $label }}</label>
@error($name)
<div class="invalid-feedback">{{ $message }}</div>
@enderror


</div>


{{-- <div class="form-check">
    <input type="checkbox" class="form-check-input" id="active" name="active" value="1">
    <label class="form-check-label" for="customCheck1">Statut present ou en conge</label>
</div>
</div>
 --}}
