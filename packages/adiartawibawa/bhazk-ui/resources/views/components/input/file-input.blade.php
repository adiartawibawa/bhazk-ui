@props([
    'variant' => null, // neutral, primary, secondary, accent, info, success, warning, error
    'size' => null, // xs, sm, md, lg, xl
    'ghost' => false,
])

@php
    $variantClass = match ($variant) {
        'neutral' => 'file-input-neutral',
        'primary' => 'file-input-primary',
        'secondary' => 'file-input-secondary',
        'accent' => 'file-input-accent',
        'info' => 'file-input-info',
        'success' => 'file-input-success',
        'warning' => 'file-input-warning',
        'error' => 'file-input-error',
        null => null,
        default => 'file-input-' . \Illuminate\Support\Str::slug($variant),
    };

    $sizeClass = match ($size) {
        'xs' => 'file-input-xs',
        'sm' => 'file-input-sm',
        'md' => 'file-input-md',
        'lg' => 'file-input-lg',
        'xl' => 'file-input-xl',
        default => null,
    };
@endphp

<input type="file"
    {{ $attributes->class(['file-input', $variantClass, $sizeClass, 'file-input-ghost' => $ghost]) }} />
