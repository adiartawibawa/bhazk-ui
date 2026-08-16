@props([
    'name' => null, // grup radio, auto-generate jika kosong
    'max' => 5,
    'value' => 0, // nilai terisi saat ini (mendukung .5 jika half=true)
    'size' => null, // xs, sm, md, lg, xl
    'half' => false, // mode setengah bintang
    'shape' => 'star-2', // star, star-2, heart, dll — nama class mask-*
    'color' => 'bg-orange-400', // warna fill, class Tailwind bg-* biasa
    'readonly' => false,
    'clearable' => true, // sertakan opsi reset ke 0
])

@php
    $name = $name ?? 'rating-' . uniqid();

    $sizeClass = match ($size) {
        'xs' => 'rating-xs',
        'sm' => 'rating-sm',
        'md' => 'rating-md',
        'lg' => 'rating-lg',
        'xl' => 'rating-xl',
        default => null,
    };
@endphp

<div {{ $attributes->class(['rating', $sizeClass, 'rating-half' => $half]) }}>
    @if ($clearable)
        <input type="radio" name="{{ $name }}" class="rating-hidden" aria-label="clear"
            @checked($value == 0) />
    @endif

    @for ($i = 1; $i <= $max; $i++)
        @if ($half)
            @php $halfValue = $i - 0.5; @endphp
            <input type="radio" name="{{ $name }}"
                class="mask mask-{{ $shape }} mask-half-1 {{ $color }}"
                aria-label="{{ $halfValue }} star" @checked($value == $halfValue)
                @if ($readonly) disabled @endif />
            <input type="radio" name="{{ $name }}"
                class="mask mask-{{ $shape }} mask-half-2 {{ $color }}"
                aria-label="{{ $i }} star" @checked($value == $i)
                @if ($readonly) disabled @endif />
        @else
            <input type="radio" name="{{ $name }}"
                class="mask mask-{{ $shape }} {{ $color }}" aria-label="{{ $i }} star"
                @checked($value == $i) @if ($readonly) disabled @endif />
        @endif
    @endfor
</div>
