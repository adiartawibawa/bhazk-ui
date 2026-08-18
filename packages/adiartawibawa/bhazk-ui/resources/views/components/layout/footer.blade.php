@props([
    'direction' => null, // horizontal, vertical (default)
    'center' => false,
])

@php
    $directionClass = match ($direction) {
        'horizontal' => 'footer-horizontal',
        'vertical' => 'footer-vertical',
        default => null,
    };
@endphp

<footer {{ $attributes->class(['footer', $directionClass, 'footer-center' => $center]) }}>
    {{ $slot }}
</footer>
