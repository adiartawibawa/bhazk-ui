@props([
    'floating' => false, // true = label melayang di atas field saat fokus
])

@if ($floating)
    {{-- Mode floating: slot berisi <span>Teks</span> + field sekaligus,
         keduanya jadi children dari <label> ini --}}
    <label {{ $attributes->class(['floating-label']) }}>
        {{ $slot }}
    </label>
@else
    {{-- Mode biasa: label/deskripsi kecil berdiri sendiri --}}
    <span {{ $attributes->class(['label']) }}>
        {{ $slot }}
    </span>
@endif
