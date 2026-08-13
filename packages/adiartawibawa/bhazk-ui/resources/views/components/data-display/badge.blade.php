@props([
    'variant' => null, // neutral, primary, secondary, accent, info, success, warning, error
    'size' => null, // xs, sm, md, lg, xl
    'style' => null, // outline, ghost, soft, dash
])

@php
    $variantClass = match ($variant) {
        'neutral' => 'badge-neutral',
        'primary' => 'badge-primary',
        'secondary' => 'badge-secondary',
        'accent' => 'badge-accent',
        'info' => 'badge-info',
        'success' => 'badge-success',
        'warning' => 'badge-warning',
        'error' => 'badge-error',
        null => null,
        default => 'badge-' . \Illuminate\Support\Str::slug($variant), // fallback custom theme
    };

    $sizeClass = match ($size) {
        'xs' => 'badge-xs',
        'sm' => 'badge-sm',
        'md' => 'badge-md',
        'lg' => 'badge-lg',
        'xl' => 'badge-xl',
        default => null,
    };

    $styleClass = match ($style) {
        'outline' => 'badge-outline',
        'ghost' => 'badge-ghost',
        'soft' => 'badge-soft',
        'dash' => 'badge-dash',
        default => null,
    };
@endphp

<span {{ $attributes->class(['badge', $variantClass, $sizeClass, $styleClass]) }}>
    {{ $slot }}
</span>
