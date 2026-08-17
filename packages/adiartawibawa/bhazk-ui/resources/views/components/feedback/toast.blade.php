@props([
    'horizontal' => 'end', // start, center, end
    'vertical' => 'bottom', // top, middle, bottom
])

@php
    $hClass = match ($horizontal) {
        'start' => 'toast-start',
        'center' => 'toast-center',
        'end' => 'toast-end',
        default => null,
    };

    $vClass = match ($vertical) {
        'top' => 'toast-top',
        'middle' => 'toast-middle',
        'bottom' => 'toast-bottom',
        default => null,
    };
@endphp

{{-- Wrapper posisi statis — isi bebas, biasanya diisi <x-feedback.alert> --}}
<div {{ $attributes->class(['toast', $hClass, $vClass]) }}>
    {{ $slot }}
</div>
