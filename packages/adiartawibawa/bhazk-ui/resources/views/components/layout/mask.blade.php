@props([
    'shape' => 'squircle', // squircle, heart, hexagon, hexagon-2, decagon, pentagon, diamond, square, circle, star, star-2, triangle, triangle-2, triangle-3, triangle-4
    'half' => null, // 1 atau 2 — untuk efek dua warna berdampingan
    'src' => null, // jika diisi, render <img>; jika tidak, bungkus $slot dalam <div>
    'alt' => '',
])

@php
    // Ditulis literal — sesuai daftar resmi 14 bentuk, aman untuk Tailwind
    // JIT tanpa mengandalkan fallback slug runtime.
    $shapeClass = match ($shape) {
        'squircle' => 'mask-squircle',
        'heart' => 'mask-heart',
        'hexagon' => 'mask-hexagon',
        'hexagon-2' => 'mask-hexagon-2',
        'decagon' => 'mask-decagon',
        'pentagon' => 'mask-pentagon',
        'diamond' => 'mask-diamond',
        'square' => 'mask-square',
        'circle' => 'mask-circle',
        'star' => 'mask-star',
        'star-2' => 'mask-star-2',
        'triangle' => 'mask-triangle',
        'triangle-2' => 'mask-triangle-2',
        'triangle-3' => 'mask-triangle-3',
        'triangle-4' => 'mask-triangle-4',
        default => 'mask-squircle',
    };

    $halfClass = match ((int) $half) {
        1 => 'mask-half-1',
        2 => 'mask-half-2',
        default => null,
    };
@endphp

@if ($src)
    <img src="{{ $src }}" alt="{{ $alt }}"
        {{ $attributes->class(['mask', $shapeClass, $halfClass]) }} />
@else
    <div {{ $attributes->class(['mask', $shapeClass, $halfClass]) }}>{{ $slot }}</div>
@endif
