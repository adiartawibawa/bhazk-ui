@props([
    'words' => [], // array string, maks 6 — diabaikan jika $slot diisi manual
])

<span {{ $attributes->class(['text-rotate']) }}>
    <span>
        @if ($slot->isNotEmpty())
            {{ $slot }}
        @else
            @foreach ($words as $word)
                <span>{{ $word }}</span>
            @endforeach
        @endif
    </span>
</span>
