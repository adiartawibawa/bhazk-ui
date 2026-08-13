@props([
    'snap' => null, // start (default), center, end
    'direction' => null, // horizontal (default), vertical
])

@php
    $snapClass = match ($snap) {
        'center' => 'carousel-center',
        'end' => 'carousel-end',
        'start' => 'carousel-start',
        default => null,
    };

    $directionClass = match ($direction) {
        'vertical' => 'carousel-vertical',
        'horizontal' => 'carousel-horizontal',
        default => null,
    };
@endphp

<div {{ $attributes->class(['carousel', $snapClass, $directionClass]) }}>
    {{ $slot }}
</div>
