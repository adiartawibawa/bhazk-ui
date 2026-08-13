@props(['name', 'icon' => 'arrow', 'open' => false])

@php
    $iconClass = match ($icon) {
        'arrow' => 'collapse-arrow',
        'plus' => 'collapse-plus',
        default => null,
    };
@endphp

<div {{ $attributes->class(['collapse', $iconClass]) }}>
    <input type="radio" name="{{ $name }}" @checked($open) />
    <div class="collapse-title font-semibold">{{ $title }}</div>
    <div class="collapse-content text-sm">{{ $slot }}</div>
</div>
