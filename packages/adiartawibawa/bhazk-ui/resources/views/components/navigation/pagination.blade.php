@props([
    'vertical' => false, // susun item secara vertikal, bukan horizontal
])

{{--
    Ini murni wrapper "join" — mekanisme resmi DaisyUI untuk pagination.
    Item di dalamnya WAJIB memakai <x-actions.button class="join-item">
    (bukan komponen baru) supaya konsisten dengan komponen aksi yang sudah
    dibangun sebelumnya, dan otomatis mewarisi seluruh fitur button
    (active, disabled, href, size, square, circle, spinner, dst).
--}}
<div {{ $attributes->class(['join', 'join-vertical' => $vertical]) }}>
    {{ $slot }}
</div>
