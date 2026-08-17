@props([
    'variant' => null, // info, success, warning, error
    'style' => null, // outline, dash, soft
    'direction' => null, // vertical, horizontal
    'icon' => null, // opsional — SVG/emoji di depan pesan
    'dismissible' => false, // tampilkan tombol ✕ untuk menutup (Alpine, tanpa reload)
])

@php
    $variantClass = match ($variant) {
        'info' => 'alert-info',
        'success' => 'alert-success',
        'warning' => 'alert-warning',
        'error' => 'alert-error',
        default => null,
    };

    $styleClass = match ($style) {
        'outline' => 'alert-outline',
        'dash' => 'alert-dash',
        'soft' => 'alert-soft',
        default => null,
    };

    $directionClass = match ($direction) {
        'vertical' => 'alert-vertical',
        'horizontal' => 'alert-horizontal',
        default => null,
    };
@endphp

@if ($dismissible)
    {{-- x-data lokal per instance — aman dipanggil berkali-kali di satu halaman --}}
    <div x-data="{ show: true }" x-show="show" x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" role="alert"
        {{ $attributes->class(['alert', $variantClass, $styleClass, $directionClass]) }}>
        @if ($icon)
            <span class="inline-flex shrink-0">{{ $icon }}</span>
        @endif

        <span>{{ $slot }}</span>

        <button type="button" class="btn btn-ghost btn-sm btn-circle" x-on:click="show = false"
            aria-label="Tutup">✕</button>
    </div>
@else
    <div role="alert" {{ $attributes->class(['alert', $variantClass, $styleClass, $directionClass]) }}>
        @if ($icon)
            <span class="inline-flex shrink-0">{{ $icon }}</span>
        @endif

        {{ $slot }}
    </div>
@endif
