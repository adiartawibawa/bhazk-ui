@props([
    'zebra' => false,
    'pinRows' => false,
    'pinCols' => false,
    'size' => null, // xs, sm, md, lg, xl
])

@php
    $sizeClass = match ($size) {
        'xs' => 'table-xs',
        'sm' => 'table-sm',
        'md' => 'table-md',
        'lg' => 'table-lg',
        'xl' => 'table-xl',
        default => null,
    };
@endphp

{{-- overflow-x-auto wajib dibungkus di sini — praktik resmi DaisyUI supaya
     table tetap scrollable secara horizontal di layar sempit --}}
<div class="overflow-x-auto">
    <table
        {{ $attributes->class([
            'table',
            $sizeClass,
            'table-zebra' => $zebra,
            'table-pin-rows' => $pinRows,
            'table-pin-cols' => $pinCols,
        ]) }}>
        @isset($head)
            <thead>{{ $head }}</thead>
        @endisset

        <tbody>{{ $slot }}</tbody>

        @isset($foot)
            <tfoot>{{ $foot }}</tfoot>
        @endisset
    </table>
</div>
