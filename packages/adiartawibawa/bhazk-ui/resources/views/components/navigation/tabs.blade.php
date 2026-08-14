@props([
    'style' => null, // box, border, lift
    'placement' => null, // top (default), bottom
    'size' => null, // xs, sm, md, lg, xl
])

@php
    $styleClass = match ($style) {
        'box' => 'tabs-box',
        'border' => 'tabs-border',
        'lift' => 'tabs-lift',
        default => null,
    };

    $placementClass = match ($placement) {
        'bottom' => 'tabs-bottom',
        'top' => 'tabs-top',
        default => null,
    };

    $sizeClass = match ($size) {
        'xs' => 'tabs-xs',
        'sm' => 'tabs-sm',
        'md' => 'tabs-md',
        'lg' => 'tabs-lg',
        'xl' => 'tabs-xl',
        default => null,
    };
@endphp

<div role="tablist" {{ $attributes->class(['tabs', $styleClass, $placementClass, $sizeClass]) }}>
    {{ $slot }}
</div>
