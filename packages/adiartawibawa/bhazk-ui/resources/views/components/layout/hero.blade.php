@props([
    'backgroundImage' => null, // URL gambar latar opsional
    'overlay' => false, // tampilkan overlay gelap (untuk kontras teks di atas gambar)
])

<div @if ($backgroundImage) style="background-image: url('{{ $backgroundImage }}');" @endif
    {{ $attributes->class(['hero']) }}>
    @if ($overlay)
        <div class="hero-overlay"></div>
    @endif

    <div class="hero-content">
        {{ $slot }}
    </div>
</div>
