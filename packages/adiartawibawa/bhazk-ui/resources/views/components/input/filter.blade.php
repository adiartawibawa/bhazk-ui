@props([
    'name' => null, // grup radio, auto-generate jika kosong
    'asForm' => true, // true = <form> (reset native berfungsi), false = <div>
])

@php
    $name = $name ?? 'filter-' . uniqid();
    $tag = $asForm ? 'form' : 'div';
@endphp

<{{ $tag }} {{ $attributes->class(['filter']) }}>
    <input class="btn filter-reset" type="radio" name="{{ $name }}" aria-label="×" />
    {{ $slot }}
    </{{ $tag }}>
