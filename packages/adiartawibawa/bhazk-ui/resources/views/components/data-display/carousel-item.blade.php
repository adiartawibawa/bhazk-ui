@props([
    'id' => null, // wajib diisi jika ingin dinavigasi lewat anchor link (#id)
])

<div @if ($id) id="{{ $id }}" @endif {{ $attributes->class(['carousel-item']) }}>
    {{ $slot }}
</div>
