@props([
    'target' => null, // WAJIB — isi dengan id yang sama seperti pada drawer induk
])

{{-- <label> murni CSS — berfungsi buka/tutup drawer tanpa JS sama sekali,
     karena secara native mengaktifkan <input type="checkbox"> pasangannya. --}}
<label for="{{ $target }}" aria-label="Buka sidebar" {{ $attributes->class(['btn', 'drawer-button']) }}>
    {{ $slot }}
</label>
