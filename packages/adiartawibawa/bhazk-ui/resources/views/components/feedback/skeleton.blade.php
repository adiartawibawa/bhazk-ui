@props([
    'text' => false, // bentuk khusus untuk placeholder teks
])

{{-- Dimensi (w-*, h-*, rounded-*) sepenuhnya ditentukan consumer lewat
     class Tailwind biasa — komponen ini hanya membawa efek shimmer. --}}
<div {{ $attributes->class(['skeleton', 'skeleton-text' => $text]) }}></div>
