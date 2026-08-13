@props([
    'direction' => null, // horizontal (default), vertical
])

@php
    $directionClass = match ($direction) {
        'vertical' => 'stats-vertical',
        'horizontal' => 'stats-horizontal',
        default => null,
    };
@endphp

<div {{ $attributes->class(['stats', $directionClass]) }}>
    {{ $slot }}
</div>
