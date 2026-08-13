@props([
    'icon' => null,
    'open' => false,
    'forceOpen' => false,
    'forceClose' => false,
])

@php
    $iconClass = match ($icon) {
        'arrow' => 'collapse-arrow',
        'plus' => 'collapse-plus',
        default => null,
    };
@endphp

<div
    {{ $attributes->class(['collapse', $iconClass, 'collapse-open' => $forceOpen, 'collapse-close' => $forceClose]) }}>
    <input type="checkbox" @checked($open) />
    <div class="collapse-title font-semibold">{{ $title }}</div>
    <div class="collapse-content text-sm">{{ $slot }}</div>
</div>
