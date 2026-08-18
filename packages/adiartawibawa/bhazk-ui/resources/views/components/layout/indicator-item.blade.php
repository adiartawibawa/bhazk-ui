@props([
    'vertical' => 'top', // top (default), middle, bottom
    'horizontal' => 'end', // start, center, end (default)
])

@php
    $vClass = match ($vertical) {
        'top' => 'indicator-top',
        'middle' => 'indicator-middle',
        'bottom' => 'indicator-bottom',
        default => null,
    };
    $hClass = match ($horizontal) {
        'start' => 'indicator-start',
        'center' => 'indicator-center',
        'end' => 'indicator-end',
        default => null,
    };
@endphp

<span {{ $attributes->class(['indicator-item', $vClass, $hClass]) }}>
    {{ $slot }}
</span>
