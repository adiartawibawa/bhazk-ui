@props([
    'type' => 'spinner', // spinner, dots, ring, ball, bars, infinity
    'size' => null, // xs, sm, md, lg, xl
    'color' => null, // primary, secondary, accent, neutral, info, success, warning, error
])

@php
    $typeClass = match ($type) {
        'dots' => 'loading-dots',
        'ring' => 'loading-ring',
        'ball' => 'loading-ball',
        'bars' => 'loading-bars',
        'infinity' => 'loading-infinity',
        default => 'loading-spinner',
    };

    $sizeClass = match ($size) {
        'xs' => 'loading-xs',
        'sm' => 'loading-sm',
        'md' => 'loading-md',
        'lg' => 'loading-lg',
        'xl' => 'loading-xl',
        default => null,
    };

    $colorClass = match ($color) {
        'primary' => 'text-primary',
        'secondary' => 'text-secondary',
        'accent' => 'text-accent',
        'neutral' => 'text-neutral',
        'info' => 'text-info',
        'success' => 'text-success',
        'warning' => 'text-warning',
        'error' => 'text-error',
        null => null,
        default => 'text-' . \Illuminate\Support\Str::slug($color),
    };
@endphp

<span {{ $attributes->class(['loading', $typeClass, $sizeClass, $colorClass]) }}></span>
