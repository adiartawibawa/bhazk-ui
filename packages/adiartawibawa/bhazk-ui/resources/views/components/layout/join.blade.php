@props([
    'direction' => null, // horizontal (default), vertical
])

@php
    $directionClass = match ($direction) {
        'vertical' => 'join-vertical',
        'horizontal' => 'join-horizontal',
        default => null,
    };
@endphp

{{-- Item di dalamnya cukup diberi class "join-item" manual — komponen
     apa pun (button, input, select) yang sudah dibuat sebelumnya sudah
     otomatis kompatibel karena semuanya pakai $attributes->class(). --}}
<div {{ $attributes->class(['join', $directionClass]) }}>
    {{ $slot }}
</div>
