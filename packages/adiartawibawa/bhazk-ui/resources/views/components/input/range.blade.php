@props([
    'variant' => null, // neutral, primary, secondary, accent, info, success, warning, error
    'size' => null, // xs, sm, md, lg, xl
    'vertical' => false, // slider vertikal (v5.6+)
    'min' => 0,
    'max' => 100,
    'step' => null,
])

@php
    $variantClass = match ($variant) {
        'neutral' => 'range-neutral',
        'primary' => 'range-primary',
        'secondary' => 'range-secondary',
        'accent' => 'range-accent',
        'info' => 'range-info',
        'success' => 'range-success',
        'warning' => 'range-warning',
        'error' => 'range-error',
        null => null,
        default => 'range-' . \Illuminate\Support\Str::slug($variant),
    };

    $sizeClass = match ($size) {
        'xs' => 'range-xs',
        'sm' => 'range-sm',
        'md' => 'range-md',
        'lg' => 'range-lg',
        'xl' => 'range-xl',
        default => null,
    };
@endphp

<input type="range" min="{{ $min }}" max="{{ $max }}"
    @if ($step) step="{{ $step }}" @endif
    {{ $attributes->class(['range', $variantClass, $sizeClass, 'range-vertical' => $vertical]) }} />
