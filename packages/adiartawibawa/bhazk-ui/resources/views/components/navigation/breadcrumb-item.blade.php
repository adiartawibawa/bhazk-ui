@props([
    'href' => null, // diisi = <a> (bisa diklik); kosong = <span> (halaman aktif/current)
    'icon' => null, // opsional, SVG/emoji di depan teks
])

<li>
    @if (filled($href))
        <a href="{{ $href }}" {{ $attributes->class(['inline-flex', 'items-center', 'gap-2']) }}>
            @if ($icon)
                <span class="inline-flex shrink-0">{{ $icon }}</span>
            @endif
            {{ $slot }}
        </a>
    @else
        <span {{ $attributes->class(['inline-flex', 'items-center', 'gap-2']) }}>
            @if ($icon)
                <span class="inline-flex shrink-0">{{ $icon }}</span>
            @endif
            {{ $slot }}
        </span>
    @endif
</li>
