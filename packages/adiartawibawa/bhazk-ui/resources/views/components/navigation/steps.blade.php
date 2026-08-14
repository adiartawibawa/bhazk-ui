@props([
    'direction' => null, // horizontal (default), vertical
])

@php
    $directionClass = match ($direction) {
        'vertical' => 'steps-vertical',
        'horizontal' => 'steps-horizontal',
        default => null,
    };
@endphp

<ul {{ $attributes->class(['steps', $directionClass]) }}>
    {{ $slot }}
</ul>
