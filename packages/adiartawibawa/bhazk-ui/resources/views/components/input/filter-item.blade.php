@php
    $name = $name ?? null;
    $label = $label ?? null;
@endphp

<input class="btn" type="radio" name="{{ $name }}" aria-label="{{ $label }}" {{ $attributes }} />
