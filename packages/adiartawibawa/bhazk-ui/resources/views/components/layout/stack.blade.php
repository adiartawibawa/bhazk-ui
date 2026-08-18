@props([])

{{-- v5: lebar/tinggi diatur di elemen stack ini sendiri (lewat class),
     BUKAN lagi di masing-masing child seperti versi lama DaisyUI. --}}
<div {{ $attributes->class(['stack']) }}>
    {{ $slot }}
</div>
