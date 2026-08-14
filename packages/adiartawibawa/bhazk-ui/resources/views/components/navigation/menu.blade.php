@props([
    'direction' => null, // horizontal, vertical (default)
    'size' => null, // xs, sm, md, lg, xl
])

@php
    $directionClass = match ($direction) {
        'horizontal' => 'menu-horizontal',
        'vertical' => 'menu-vertical',
        default => null,
    };

    $sizeClass = match ($size) {
        'xs' => 'menu-xs',
        'sm' => 'menu-sm',
        'md' => 'menu-md',
        'lg' => 'menu-lg',
        'xl' => 'menu-xl',
        default => null,
    };
@endphp

<ul {{ $attributes->class(['menu', $directionClass, $sizeClass]) }}>
    {{ $slot }}
</ul>
