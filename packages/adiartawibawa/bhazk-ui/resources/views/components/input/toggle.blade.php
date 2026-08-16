@props([
    'variant' => null,
    'size' => null,
    'label' => null,
    'validator' => false, //
    'hint' => null, //
])

@php
    $variantClass = match ($variant) {
        'neutral' => 'toggle-neutral',
        'primary' => 'toggle-primary',
        'secondary' => 'toggle-secondary',
        'accent' => 'toggle-accent',
        'info' => 'toggle-info',
        'success' => 'toggle-success',
        'warning' => 'toggle-warning',
        'error' => 'toggle-error',
        null => null,
        default => 'toggle-' . \Illuminate\Support\Str::slug($variant),
    };

    $sizeClass = match ($size) {
        'xs' => 'toggle-xs',
        'sm' => 'toggle-sm',
        'md' => 'toggle-md',
        'lg' => 'toggle-lg',
        'xl' => 'toggle-xl',
        default => null,
    };
@endphp

@if ($label)
    <label class="label cursor-pointer gap-2 justify-start">
        <input type="checkbox"
            {{ $attributes->class(['toggle', $variantClass, $sizeClass, 'validator' => $validator]) }} />
        <span class="label-text">{{ $label }}</span>
    </label>
@else
    <input type="checkbox" {{ $attributes->class(['toggle', $variantClass, $sizeClass, 'validator' => $validator]) }} />
@endif

@if ($hint)
    <p class="validator-hint">{{ $hint }}</p>
@endif
