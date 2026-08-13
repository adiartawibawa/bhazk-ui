@props([])

{{-- Isi slot dengan 2-10 elemen <img>, dimensi yang sama.
     Wajib set max-width (lewat class) agar tidak melebar penuh container. --}}
<figure {{ $attributes->class(['hover-gallery']) }}>
    {{ $slot }}
</figure>
