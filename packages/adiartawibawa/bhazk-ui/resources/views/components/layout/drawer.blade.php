@props([
    'id' => null, // wajib, unik — dipakai seluruh sub-komponen untuk mencocokkan checkbox
    'end' => false, // buka dari sisi kanan, bukan kiri
    'openOnLarge' => null, // sm, md, lg, xl — otomatis terbuka mulai breakpoint ini
    'forceOpen' => false, // paksa selalu terbuka
])

@php
    $id = $id ?? 'drawer-' . uniqid();

    $openOnLargeClass = match ($openOnLarge) {
        'sm' => 'sm:drawer-open',
        'md' => 'md:drawer-open',
        'lg' => 'lg:drawer-open',
        'xl' => 'xl:drawer-open',
        default => null,
    };
@endphp

<div {{ $attributes->class(['drawer', 'drawer-end' => $end, 'drawer-open' => $forceOpen, $openOnLargeClass]) }}>
    <input id="{{ $id }}" type="checkbox" class="drawer-toggle" @checked($forceOpen) />
    {{ $slot }}
</div>
