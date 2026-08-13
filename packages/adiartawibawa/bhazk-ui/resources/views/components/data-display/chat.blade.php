@props([
    'placement' => 'start', // start, end (wajib salah satu)
    'variant' => null, // neutral, primary, secondary, accent, info, success, warning, error
])

@php
    $placementClass = match ($placement) {
        'end' => 'chat-end',
        default => 'chat-start',
    };

    $variantClass = match ($variant) {
        'neutral' => 'chat-bubble-neutral',
        'primary' => 'chat-bubble-primary',
        'secondary' => 'chat-bubble-secondary',
        'accent' => 'chat-bubble-accent',
        'info' => 'chat-bubble-info',
        'success' => 'chat-bubble-success',
        'warning' => 'chat-bubble-warning',
        'error' => 'chat-bubble-error',
        null => null,
        default => 'chat-bubble-' . \Illuminate\Support\Str::slug($variant),
    };
@endphp

<div {{ $attributes->class(['chat', $placementClass]) }}>
    @isset($image)
        <div class="chat-image avatar">{{ $image }}</div>
    @endisset

    @isset($header)
        <div class="chat-header">{{ $header }}</div>
    @endisset

    <div class="chat-bubble {{ $variantClass }}">{{ $slot }}</div>

    @isset($footer)
        <div class="chat-footer opacity-50">{{ $footer }}</div>
    @endisset
</div>
