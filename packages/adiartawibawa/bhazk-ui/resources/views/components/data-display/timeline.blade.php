@props([
    'direction' => null, // vertical (default), horizontal
    'compact' => false, // konten selalu di satu sisi (kanan)
    'snapIcon' => false, // ikon di timeline-middle sejajar dengan konten
])

@php
    $directionClass = match ($direction) {
        'horizontal' => 'timeline-horizontal',
        'vertical' => 'timeline-vertical',
        default => null,
    };
@endphp

<ul
    {{ $attributes->class([
        'timeline',
        $directionClass,
        'timeline-compact' => $compact,
        'timeline-snap-icon' => $snapIcon,
    ]) }}>
    {{ $slot }}
</ul>
