@props([
    'variant' => null, // neutral, primary, secondary, accent, info, success, warning, error
    'size' => null, // xs, sm, md, lg, xl
    'label' => null, // opsional — teks di samping checkbox
    'indeterminate' => false, // state "sebagian" — tidak ada atribut HTML native, butuh sentuhan JS minimal
    'validator' => false, //
    'hint' => null, //
])

@php
    $variantClass = match ($variant) {
        'neutral' => 'checkbox-neutral',
        'primary' => 'checkbox-primary',
        'secondary' => 'checkbox-secondary',
        'accent' => 'checkbox-accent',
        'info' => 'checkbox-info',
        'success' => 'checkbox-success',
        'warning' => 'checkbox-warning',
        'error' => 'checkbox-error',
        null => null,
        default => 'checkbox-' . \Illuminate\Support\Str::slug($variant),
    };

    $sizeClass = match ($size) {
        'xs' => 'checkbox-xs',
        'sm' => 'checkbox-sm',
        'md' => 'checkbox-md',
        'lg' => 'checkbox-lg',
        'xl' => 'checkbox-xl',
        default => null,
    };
@endphp

@if ($label)
    <label class="label cursor-pointer gap-2 justify-start">
        <input type="checkbox" @if ($indeterminate) x-data x-init="$el.indeterminate = true" @endif
            {{ $attributes->class(['checkbox', $variantClass, $sizeClass, 'validator' => $validator]) }} />
        <span class="label-text">{{ $label }}</span>
    </label>
@else
    <input type="checkbox" @if ($indeterminate) x-data x-init="$el.indeterminate = true" @endif
        {{ $attributes->class(['checkbox', $variantClass, $sizeClass, 'validator' => $validator]) }} />
@endif

@if ($hint)
    <p class="validator-hint">{{ $hint }}</p>
@endif
