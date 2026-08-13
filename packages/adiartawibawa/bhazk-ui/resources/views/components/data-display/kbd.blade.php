@props([
    'size' => null, // xs, sm, md, lg, xl
])

@php
    $sizeClass = match ($size) {
        'xs' => 'kbd-xs',
        'sm' => 'kbd-sm',
        'md' => 'kbd-md',
        'lg' => 'kbd-lg',
        'xl' => 'kbd-xl',
        default => null,
    };
@endphp

<kbd {{ $attributes->class(['kbd', $sizeClass]) }}>
    {{ $slot }}
</kbd>
