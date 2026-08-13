@props([
    'effect' => null, // rotate, flip
    'checked' => false, // state awal (on/off)
])

@php
    $effectClass = match ($effect) {
        'rotate' => 'swap-rotate',
        'flip' => 'swap-flip',
        default => null,
    };

    /*
    |--------------------------------------------------------------------------
    | Atribut wire:* (untuk binding Livewire, mis. wire:model) diarahkan
    | ke <input>, sisanya (class, id, dsb) ke <label> pembungkus — karena
    | mekanisme swap DaisyUI murni CSS (input:checked ~ .swap-on/.swap-off),
    | tidak butuh Alpine sama sekali untuk toggle dasarnya.
    |--------------------------------------------------------------------------
    */
    $inputAttributes = $attributes->whereStartsWith('wire:');
    $labelAttributes = $attributes->whereDoesntStartWith('wire:');
@endphp

<label {{ $labelAttributes->class(['swap', $effectClass]) }}>
    <input type="checkbox" @checked($checked) {{ $inputAttributes }} class="hidden" />
    <div class="swap-on">{{ $on }}</div>
    <div class="swap-off">{{ $off }}</div>
</label>
