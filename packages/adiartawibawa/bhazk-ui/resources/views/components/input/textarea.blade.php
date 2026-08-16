@props([
    'variant' => null, // neutral, primary, secondary, accent, info, success, warning, error
    'size' => null, // xs, sm, md, lg, xl
    'ghost' => false, // style tanpa border/background solid
    'validator' => false, // aktifkan validasi warna native (butuh required/pattern via $attributes)
    'hint' => null, // teks yang muncul otomatis saat tidak valid
    'rows' => null,
])

@php
    $variantClass = match ($variant) {
        'neutral' => 'textarea-neutral',
        'primary' => 'textarea-primary',
        'secondary' => 'textarea-secondary',
        'accent' => 'textarea-accent',
        'info' => 'textarea-info',
        'success' => 'textarea-success',
        'warning' => 'textarea-warning',
        'error' => 'textarea-error',
        null => null,
        default => 'textarea-' . \Illuminate\Support\Str::slug($variant),
    };

    $sizeClass = match ($size) {
        'xs' => 'textarea-xs',
        'sm' => 'textarea-sm',
        'md' => 'textarea-md',
        'lg' => 'textarea-lg',
        'xl' => 'textarea-xl',
        default => null,
    };
@endphp

<textarea @if ($rows) rows="{{ $rows }}" @endif
    {{ $attributes->class([
        'textarea',
        $variantClass,
        $sizeClass,
        'textarea-ghost' => $ghost,
        'validator' => $validator,
    ]) }}>{{ $slot }}</textarea>

@if ($hint)
    <p class="validator-hint">{{ $hint }}</p>
@endif
