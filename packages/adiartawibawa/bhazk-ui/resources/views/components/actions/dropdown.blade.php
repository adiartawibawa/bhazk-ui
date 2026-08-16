@props([
    'placement' => 'bottom', // top, bottom, left, right
    'align' => 'start', // start, end
    'hover' => false, // buka saat hover, bukan klik
    'open' => false, // state awal terbuka
    'contentClass' => 'w-52', // lebar/kelas tambahan untuk panel dropdown
])

@php
    /*
    |--------------------------------------------------------------------------
    | Semua class ditulis literal via match() — konsisten dengan pola button,
    | supaya Tailwind JIT scanner selalu menemukan teks class secara harfiah
    | tanpa butuh safelist manual di app.css.
    |--------------------------------------------------------------------------
    */
    $placementClass = match ($placement) {
        'top' => 'dropdown-top',
        'bottom' => 'dropdown-bottom',
        'left' => 'dropdown-left',
        'right' => 'dropdown-right',
        default => null,
    };

    $alignClass = match ($align) {
        'end' => 'dropdown-end',
        default => null, // 'start' adalah default DaisyUI, tidak butuh class
    };

    /*
    |--------------------------------------------------------------------------
    | Jarak antara trigger dan panel — arah margin menyesuaikan sisi panel
    | muncul relatif terhadap trigger.
    |--------------------------------------------------------------------------
    */
    $spacingClass = match ($placement) {
        'top' => 'mb-2',
        'left' => 'mr-2',
        'right' => 'ml-2',
        default => 'mt-2', // bottom
    };
@endphp

{{--
    Alpine state di-deklarasikan langsung di root element (x-data di sini,
    bukan di layout luar) supaya setiap instance <x-actions.dropdown />
    punya variabel `open` yang terisolasi — aman dipanggil berkali-kali
    dalam satu halaman tanpa saling bentrok.
--}}
<div x-data="{ open: {{ $open ? 'true' : 'false' }} }" x-on:click.outside="open = false" x-on:keydown.escape.window="open = false"
    {{ $attributes->class(['dropdown', $placementClass, $alignClass, 'dropdown-hover' => $hover]) }}
    :class="{ 'dropdown-open': open }">
    <div tabindex="0" role="button" x-on:click="open = !open">
        {{ $trigger }}
    </div>

    <ul tabindex="0" x-on:click="open = false"
        class="dropdown-content menu z-50 bg-base-100 rounded-box p-2 shadow-sm {{ $spacingClass }} {{ $contentClass }}">
        {{ $slot }}
    </ul>
</div>
