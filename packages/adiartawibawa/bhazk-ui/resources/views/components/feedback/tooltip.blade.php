@props([
    'text' => null, // WAJIB — isi tooltip (atribut data-tip)
    'placement' => null, // top (default), bottom, left, right
    'align' => null, // start, end
    'variant' => null, // primary, secondary, accent, info, success, warning, error
    'open' => false, // paksa selalu terlihat
])

@php
    $placementClass = match ($placement) {
        'bottom' => 'tooltip-bottom',
        'left' => 'tooltip-left',
        'right' => 'tooltip-right',
        'top' => 'tooltip-top',
        default => null,
    };

    $alignClass = match ($align) {
        'start' => 'tooltip-start',
        'end' => 'tooltip-end',
        default => null,
    };

    $variantClass = match ($variant) {
        'primary' => 'tooltip-primary',
        'secondary' => 'tooltip-secondary',
        'accent' => 'tooltip-accent',
        'info' => 'tooltip-info',
        'success' => 'tooltip-success',
        'warning' => 'tooltip-warning',
        'error' => 'tooltip-error',
        null => null,
        default => 'tooltip-' . \Illuminate\Support\Str::slug($variant),
    };
@endphp

<div data-tip="{{ $text }}"
    {{ $attributes->class(['tooltip', $placementClass, $alignClass, $variantClass, 'tooltip-open' => $open]) }}>
    {{ $slot }}
</div>
