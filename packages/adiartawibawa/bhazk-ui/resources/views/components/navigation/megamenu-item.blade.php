@props([
    'id' => null, // WAJIB, unik — id ini dijadikan target popover oleh tombolnya sendiri
    'label' => null, // WAJIB — teks tombol
    'noArrow' => false,
])

{{--
    Komponen ini SENGAJA merender 2 elemen sibling (<button> lalu <div>),
    mengikuti struktur resmi Megamenu: setiap tombol punya popover
    pasangannya sendiri via popovertarget yang match dengan id div berikutnya.
--}}
<button @class(['after:content-none' => $noArrow]) popovertarget="{{ $id }}">{{ $label }}</button>
<div id="{{ $id }}" popover {{ $attributes }}>
    {{ $slot }}
</div>
