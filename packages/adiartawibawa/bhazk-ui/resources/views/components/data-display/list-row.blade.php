@props([])

{{--
    Isi kolom di dalam list-row sepenuhnya bebas ditentukan consumer (avatar,
    teks, tombol) — DaisyUI tidak memaksakan struktur kolom tetap di sini,
    beda dengan card yang punya slot terstruktur (figure/title/actions).
--}}
<li {{ $attributes->class(['list-row']) }}>
    {{ $slot }}
</li>
