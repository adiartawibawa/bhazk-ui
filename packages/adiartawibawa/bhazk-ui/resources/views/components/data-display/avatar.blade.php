@props([
    'src' => null,
    'alt' => '',
    'size' => 'w-12', // token Tailwind literal, ditulis langsung oleh consumer di file pemanggil
    'shape' => 'circle', // circle, square
    'status' => null, // online, offline
    'placeholder' => null, // teks (mis. inisial) jika tidak ada src
    'ring' => null, // primary, secondary, accent, neutral — highlight ring opsional
])

@php
    $shapeClass = match ($shape) {
        'square' => 'rounded',
        default => 'rounded-full',
    };

    $statusClass = match ($status) {
        'online' => 'avatar-online',
        'offline' => 'avatar-offline',
        default => null,
    };

    $ringClass = match ($ring) {
        'primary' => 'ring ring-primary ring-offset-base-100 ring-offset-2',
        'secondary' => 'ring ring-secondary ring-offset-base-100 ring-offset-2',
        'accent' => 'ring ring-accent ring-offset-base-100 ring-offset-2',
        'neutral' => 'ring ring-neutral ring-offset-base-100 ring-offset-2',
        default => null,
    };

    $isPlaceholder = filled($placeholder) && blank($src);
@endphp

<div {{ $attributes->class(['avatar', $statusClass, 'avatar-placeholder' => $isPlaceholder]) }}>
    <div
        class="{{ $size }} {{ $shapeClass }} {{ $ringClass }} @if ($isPlaceholder) bg-neutral text-neutral-content @endif">
        @if ($isPlaceholder)
            <span>{{ $placeholder }}</span>
        @else
            <img src="{{ $src }}" alt="{{ $alt }}" />
        @endif
    </div>
</div>
