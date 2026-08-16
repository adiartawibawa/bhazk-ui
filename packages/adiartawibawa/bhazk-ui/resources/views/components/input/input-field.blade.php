@props([
    'variant' => null, // neutral, primary, secondary, accent, info, success, warning, error
    'size' => null, // xs, sm, md, lg, xl
    'icon' => null, // opsional — leading icon, otomatis membungkus input dalam <label class="input">
    'validator' => false, // aktifkan validasi native browser (required/pattern/min/max via $attributes)
    'hint' => null, // teks yang muncul otomatis saat input tidak valid (butuh validator)
    'type' => 'text',
])

@php
    $variantClass = match ($variant) {
        'neutral' => 'input-neutral',
        'primary' => 'input-primary',
        'secondary' => 'input-secondary',
        'accent' => 'input-accent',
        'info' => 'input-info',
        'success' => 'input-success',
        'warning' => 'input-warning',
        'error' => 'input-error',
        null => null,
        default => 'input-' . \Illuminate\Support\Str::slug($variant),
    };

    $sizeClass = match ($size) {
        'xs' => 'input-xs',
        'sm' => 'input-sm',
        'md' => 'input-md',
        'lg' => 'input-lg',
        'xl' => 'input-xl',
        default => null,
    };

    $hasIcon = filled($icon);
@endphp

@if ($hasIcon)
    {{--
        Pola resmi DaisyUI untuk leading icon: class "input" dipindah ke
        <label> pembungkus, <input> di dalamnya jadi polos tanpa border
        sendiri (mewarisi tampilan dari label). Class dipisah khusus ke
        label; atribut native lain (placeholder, required, name, wire:model,
        dst) tetap diteruskan ke elemen <input> yang sesungguhnya.
    --}}
    <label {{ $attributes->only(['class'])->class(['input', $variantClass, $sizeClass, 'validator' => $validator]) }}>
        <span class="inline-flex shrink-0 opacity-50">{{ $icon }}</span>
        <input type="{{ $type }}" {{ $attributes->except(['class']) }} />
    </label>
@else
    <input type="{{ $type }}"
        {{ $attributes->class(['input', $variantClass, $sizeClass, 'validator' => $validator]) }} />
@endif

@if ($hint)
    <p class="validator-hint">{{ $hint }}</p>
@endif
