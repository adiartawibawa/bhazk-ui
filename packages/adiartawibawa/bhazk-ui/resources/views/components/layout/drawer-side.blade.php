@props([
    'target' => null, // WAJIB — isi dengan id yang sama seperti pada drawer induk
])

<div {{ $attributes->class(['drawer-side']) }}>
    <label for="{{ $target }}" aria-label="Tutup sidebar" class="drawer-overlay"></label>
    {{ $slot }}
</div>
