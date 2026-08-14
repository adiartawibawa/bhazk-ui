@props([
    'id' => null, // WAJIB — dipakai sebagai popovertarget dari tombol trigger (mobile)
    'wide' => false,
    'full' => false,
    'size' => null, // xs, sm, md, lg, xl
])

@php
    $sizeClass = match ($size) {
        'xs' => 'megamenu-xs',
        'sm' => 'megamenu-sm',
        'md' => 'megamenu-md',
        'lg' => 'megamenu-lg',
        'xl' => 'megamenu-xl',
        default => null,
    };
@endphp

{{--
    popover (native HTML API) — bukan Alpine/JS. max-sm:megamenu-vertical
    otomatis disertakan agar tampilan jatuh ke vertikal di layar kecil,
    sesuai rekomendasi resmi DaisyUI untuk struktur responsive megamenu.
--}}
<div id="{{ $id }}" popover
    {{ $attributes->class([
        'megamenu',
        'max-sm:megamenu-vertical',
        'megamenu-wide' => $wide,
        'megamenu-full' => $full,
        $sizeClass,
    ]) }}>
    <span class="megamenu-active"></span>
    {{ $slot }}
</div>
