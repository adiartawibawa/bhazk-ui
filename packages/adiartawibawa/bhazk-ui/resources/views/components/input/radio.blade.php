@props([
    'name' => null, // WAJIB — item dengan name sama membentuk satu grup exclusive
    'variant' => null,
    'size' => null,
    'label' => null,
])

@php
    $variantClass = match ($variant) {
        'neutral' => 'radio-neutral',
        'primary' => 'radio-primary',
        'secondary' => 'radio-secondary',
        'accent' => 'radio-accent',
        'info' => 'radio-info',
        'success' => 'radio-success',
        'warning' => 'radio-warning',
        'error' => 'radio-error',
        null => null,
        default => 'radio-' . \Illuminate\Support\Str::slug($variant),
    };

    $sizeClass = match ($size) {
        'xs' => 'radio-xs',
        'sm' => 'radio-sm',
        'md' => 'radio-md',
        'lg' => 'radio-lg',
        'xl' => 'radio-xl',
        default => null,
    };
@endphp

@if ($label)
    <label class="label cursor-pointer gap-2 justify-start">
        <input type="radio" name="{{ $name }}" {{ $attributes->class(['radio', $variantClass, $sizeClass]) }} />
        <span class="label-text">{{ $label }}</span>
    </label>
@else
    <input type="radio" name="{{ $name }}" {{ $attributes->class(['radio', $variantClass, $sizeClass]) }} />
@endif
