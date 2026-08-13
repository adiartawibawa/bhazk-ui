@props([
    'href' => null, // jika diisi, seluruh area jadi <a> yang bisa diklik
])

@php
    $tag = filled($href) ? 'a' : 'div';
@endphp

<{{ $tag }} @if ($tag === 'a') href="{{ $href }}" @endif
    {{ $attributes->class(['hover-3d']) }}>
    {{ $slot }}

    {{-- 8 div kosong WAJIB ada — masing-masing jadi zona deteksi mouse untuk
         menghitung sudut tilt 3D. Jangan dihapus meski terlihat tidak berguna. --}}
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    </{{ $tag }}>
