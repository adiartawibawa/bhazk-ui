@props([
    'value' => 0, // nilai statis awal (0-999), dipakai jika 'bind' tidak diisi
    'bind' => null, // opsional: nama variabel Alpine reaktif di scope terdekat
])

{{--
    Murni presentational, mengikuti markup resmi DaisyUI persis. Konten
    ditulis TANPA whitespace/baris baru di dalam <span> — indentasi di sini
    akan ikut dirender sebagai text node dan berisiko mengganggu mekanisme
    crop satu-baris milik CSS "countdown" bawaan DaisyUI.
--}}
<span {{ $attributes->class(['countdown']) }}>
    @if (filled($bind))
        <span style="--value:{{ (int) $value }};" x-bind:style="'--value:' + {{ $bind }}"
            x-text="{{ $bind }}" x-bind:aria-label="{{ $bind }}"
            aria-live="polite">{{ (int) $value }}</span>
    @else
        <span style="--value:{{ (int) $value }};" aria-label="{{ (int) $value }}"
            aria-live="polite">{{ (int) $value }}</span>
    @endif
</span>
