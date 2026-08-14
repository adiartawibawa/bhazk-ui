@props([
    'size' => null, // xs, sm, md, lg, xl
])

@php
    $sizeClass = match ($size) {
        'xs' => 'dock-xs',
        'sm' => 'dock-sm',
        'md' => 'dock-md',
        'lg' => 'dock-lg',
        'xl' => 'dock-xl',
        default => null,
    };
@endphp

<div {{ $attributes->class(['dock', $sizeClass]) }}>
    {{ $slot }}
</div>
