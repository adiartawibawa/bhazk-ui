@props([
    'variant' => null, // neutral, primary, secondary, accent, info, success, warning, error
    'size' => null, // xs, sm, md, lg, xl
    'ghost' => false, // tanpa border
    'placeholder' => null, // opsi pertama, disabled+selected otomatis
    'options' => [], // array list biasa ATAU asosiatif value => label
])

@php
    $variantClass = match ($variant) {
        'neutral' => 'select-neutral',
        'primary' => 'select-primary',
        'secondary' => 'select-secondary',
        'accent' => 'select-accent',
        'info' => 'select-info',
        'success' => 'select-success',
        'warning' => 'select-warning',
        'error' => 'select-error',
        null => null,
        default => 'select-' . \Illuminate\Support\Str::slug($variant),
    };

    $sizeClass = match ($size) {
        'xs' => 'select-xs',
        'sm' => 'select-sm',
        'md' => 'select-md',
        'lg' => 'select-lg',
        'xl' => 'select-xl',
        default => null,
    };
@endphp

<select {{ $attributes->class(['select', $variantClass, $sizeClass, 'select-ghost' => $ghost]) }}>
    @if ($placeholder)
        <option disabled selected>{{ $placeholder }}</option>
    @endif

    {{--
        Dua mode: slot manual (untuk <optgroup>, opsi disabled per-item, atau
        struktur kompleks) diprioritaskan jika diisi; jika tidak, fallback ke
        prop 'options' — cukup untuk kasus umum tanpa perlu menulis <option> manual.
    --}}
    @if ($slot->isNotEmpty())
        {{ $slot }}
    @else
        @foreach ($options as $value => $label)
            <option value="{{ is_int($value) ? $label : $value }}">{{ $label }}</option>
        @endforeach
    @endif
</select>
