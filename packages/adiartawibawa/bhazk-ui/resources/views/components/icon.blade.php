@props([
    'name' => null, // WAJIB — format "nama" (pakai set default) atau "set:nama"
    'set' => null, // opsional — override set tanpa perlu prefix di 'name'
])

@php
    $svg = filled($name) ? \AdiArtaWibawa\BhazkUi\Support\IconResolver::resolve($name, $set) : null;
@endphp

@if ($svg)
    {!! \AdiArtaWibawa\BhazkUi\Support\IconResolver::render($svg, $attributes) !!}
@elseif (app()->environment('local'))
    {{-- Hanya tampil di local — supaya production tidak "bocor" info debug --}}
    <span class="text-error text-xs italic" title="Icon &quot;{{ $name }}&quot; tidak ditemukan">⚠
        {{ $name }}</span>
@endif
