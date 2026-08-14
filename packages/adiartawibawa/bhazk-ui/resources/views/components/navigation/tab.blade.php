@props([
    'href' => null, // diisi = jadi <a>; kosong = jadi <button>
    'active' => false,
    'disabled' => false,
])

@php
    $tag = filled($href) ? 'a' : 'button';
@endphp

{{-- Pola navigasi sederhana — tanpa panel konten. Untuk tab dengan konten
     yang bisa berganti-ganti, gunakan <x-navigation.tab-panel> sebagai gantinya. --}}
<{{ $tag }} role="tab"
    @if ($tag === 'a') href="{{ $disabled ? '#' : $href }}" @else type="button" @endif
    {{ $attributes->class(['tab', 'tab-active' => $active, 'tab-disabled' => $disabled]) }}>
    {{ $slot }}
    </{{ $tag }}>
