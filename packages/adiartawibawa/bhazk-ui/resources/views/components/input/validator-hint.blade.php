@props([])

{{--
    Untuk kasus field yang TIDAK dibangun lewat komponen kita (mis. markup
    native manual, atau komponen pihak ketiga) tapi tetap ingin memanfaatkan
    class "validator-hint" bawaan DaisyUI — cukup tempel komponen kecil ini
    tepat setelah elemen yang diberi class "validator".
--}}
<p {{ $attributes->class(['validator-hint']) }}>
    {{ $slot }}
</p>
