@props([
    'href' => '#',
    'color' => null, // primary, secondary, accent, neutral, success, info, warning, error
    'hover' => false, // garis bawah hanya muncul saat hover
])

@php
    $colorClass = match ($color) {
        'primary' => 'link-primary',
        'secondary' => 'link-secondary',
        'accent' => 'link-accent',
        'neutral' => 'link-neutral',
        'success' => 'link-success',
        'info' => 'link-info',
        'warning' => 'link-warning',
        'error' => 'link-error',
        default => null,
    };
@endphp

<a href="{{ $href }}" {{ $attributes->class(['link', $colorClass, 'link-hover' => $hover]) }}>
    {{ $slot }}
</a>
