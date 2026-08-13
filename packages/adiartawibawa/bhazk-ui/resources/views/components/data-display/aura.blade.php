@props([
    'style' => null, // dual, rainbow, holo, gold, silver, glow
    'size' => null, // xs, sm, md, lg, xl
])

@php
    $styleClass = match ($style) {
        'dual' => 'aura-dual',
        'rainbow' => 'aura-rainbow',
        'holo' => 'aura-holo',
        'gold' => 'aura-gold',
        'silver' => 'aura-silver',
        'glow' => 'aura-glow',
        default => null,
    };

    $sizeClass = match ($size) {
        'xs' => 'aura-xs',
        'sm' => 'aura-sm',
        'md' => 'aura-md',
        'lg' => 'aura-lg',
        'xl' => 'aura-xl',
        default => null,
    };
@endphp

<div {{ $attributes->class(['aura', $styleClass, $sizeClass]) }}>
    {{ $slot }}
</div>
