@props([
    'variant' => null, // primary, secondary, accent, neutral, info, success, warning, error
    'size' => null, // xs, sm, md, lg, xl
])

@php
    $variantClass = match ($variant) {
        'primary' => 'status-primary',
        'secondary' => 'status-secondary',
        'accent' => 'status-accent',
        'neutral' => 'status-neutral',
        'info' => 'status-info',
        'success' => 'status-success',
        'warning' => 'status-warning',
        'error' => 'status-error',
        null => null,
        default => 'status-' . \Illuminate\Support\Str::slug($variant),
    };

    $sizeClass = match ($size) {
        'xs' => 'status-xs',
        'sm' => 'status-sm',
        'md' => 'status-md',
        'lg' => 'status-lg',
        'xl' => 'status-xl',
        default => null,
    };
@endphp

<span aria-label="status" {{ $attributes->class(['status', $variantClass, $sizeClass]) }}></span>
