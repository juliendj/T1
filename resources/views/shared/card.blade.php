@php

$name = $name ?? null;
$desc = $desc ?? null;
$person = $type ?? null;

@endphp



<div class="card border-secondary border">
    <div class="card-body">
        <h5 class="card-title mb-2">$name</h5>
        <p class="card-text">$desc</p>
        <button class="btn btn-secondary btn-sm">$person</button>
    </div> <!-- end card-body-->
</div> <!-- end card-->
