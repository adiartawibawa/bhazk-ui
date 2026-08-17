@props([
    'variant' => null, // neutral, primary, secondary, accent, info, success, warning, error
    'direction' => null, // vertical (default), horizontal
    'position' => null, // start, end — posisi teks
])

@php
    $variantClass = match ($variant) {
        'neutral' => 'divider-neutral',
        'primary' => 'divider-primary',
        'secondary' => 'divider-secondary',
        'accent' => 'divider-accent',
        'info' => 'divider-info',
        'success' => 'divider-success',
        'warning' => 'divider-warning',
        'error' => 'divider-error',
        null => null,
        default => 'divider-' . \Illuminate\Support\Str::slug($variant),
    };

    $directionClass = match ($direction) {
        'horizontal' => 'divider-horizontal',
        'vertical' => 'divider-vertical',
        default => null,
    };

    $positionClass = match ($position) {
        'start' => 'divider-start',
        'end' => 'divider-end',
        default => null,
    };
@endphp

<div {{ $attributes->class(['divider', $variantClass, $directionClass, $positionClass]) }}>
    {{ $slot }}
</div>
