@props([
    'value' => null, // format YYYY-MM-DD
    'min' => null,
    'max' => null,
])

{{--
    Membungkus web component Cally. Butuh package npm 'cally' ter-install
    dan ter-import di app.js — tanpa itu, elemen ini tampil sebagai layout
    kosong tanpa fungsi (custom element belum terdaftar di browser).
--}}
<calendar-date @if ($value) value="{{ $value }}" @endif
    @if ($min) min="{{ $min }}" @endif
    @if ($max) max="{{ $max }}" @endif
    {{ $attributes->class(['cally', 'bg-base-100', 'border', 'border-base-300', 'shadow-lg', 'rounded-box']) }}>
    <svg aria-label="Previous" class="fill-current size-4" slot="previous" xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24">
        <path fill="currentColor" d="M15.75 19.5 8.25 12l7.5-7.5"></path>
    </svg>
    <svg aria-label="Next" class="fill-current size-4" slot="next" xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24">
        <path fill="currentColor" d="m8.25 4.5 7.5 7.5-7.5 7.5"></path>
    </svg>
    <calendar-month></calendar-month>
</calendar-date>
