@props([
    'variant' => null, // primary, secondary, accent, neutral, info, success, warning, error
    'icon' => null, // opsional — emoji/SVG ditampilkan sebagai step-icon
    'content' => null, // opsional — simbol custom di bullet connector (data-content)
])

@php
    $variantClass = match ($variant) {
        'primary' => 'step-primary',
        'secondary' => 'step-secondary',
        'accent' => 'step-accent',
        'neutral' => 'step-neutral',
        'info' => 'step-info',
        'success' => 'step-success',
        'warning' => 'step-warning',
        'error' => 'step-error',
        null => null,
        default => 'step-' . \Illuminate\Support\Str::slug($variant),
    };
@endphp

<li @if ($content) data-content="{{ $content }}" @endif
    {{ $attributes->class(['step', $variantClass]) }}>
    @if ($icon)
        <span class="step-icon">{{ $icon }}</span>
    @endif
    {{ $slot }}
</li>
