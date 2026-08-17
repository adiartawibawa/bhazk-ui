@props([
    'variant' => null, // neutral, primary, secondary, accent, info, success, warning, error
    'value' => null, // kosongkan untuk mode indeterminate (animasi loading bar)
    'max' => 100,
])

@php
    $variantClass = match ($variant) {
        'neutral' => 'progress-neutral',
        'primary' => 'progress-primary',
        'secondary' => 'progress-secondary',
        'accent' => 'progress-accent',
        'info' => 'progress-info',
        'success' => 'progress-success',
        'warning' => 'progress-warning',
        'error' => 'progress-error',
        null => null,
        default => 'progress-' . \Illuminate\Support\Str::slug($variant),
    };
@endphp

<progress @if (filled($value)) value="{{ $value }}" @endif max="{{ $max }}"
    {{ $attributes->class(['progress', $variantClass]) }}></progress>
