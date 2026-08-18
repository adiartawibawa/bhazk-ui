@props([
    'prefix' => null, // $, >, 1, 2, dst — teks di sisi kiri baris
    'variant' => null, // warning, success, error, info — highlight seluruh baris
])

@php
    $variantClass = match ($variant) {
        'warning' => 'bg-warning text-warning-content',
        'success' => 'bg-success text-success-content',
        'error' => 'bg-error text-error-content',
        'info' => 'bg-info text-info-content',
        default => null,
    };
@endphp

<pre @if ($prefix) data-prefix="{{ $prefix }}" @endif
    {{ $attributes->class([$variantClass]) }}><code>{{ $slot }}</code></pre>
