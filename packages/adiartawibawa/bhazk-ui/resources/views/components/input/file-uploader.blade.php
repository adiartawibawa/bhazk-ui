@props([
    'name' => 'file', // nama field, dipakai saat submit multipart/form-data
    'multiple' => false,
    'acceptedFileTypes' => null, // array mime types, mis. ['image/png', 'image/jpeg']
    'maxFileSize' => null, // string, mis. '3MB'
    'maxFiles' => null,
    'labelIdle' => 'Seret & lepas file di sini atau <span class="filepond--label-action">Jelajahi</span>',
    'allowImagePreview' => true,
    'disabled' => false,
    'server' => null, // opsional: konfigurasi endpoint proses upload (protokol resmi FilePond)
])

@php
    // Dibangun sebagai array PHP dulu, lalu di-embed via @json() Blade —
    // cara resmi Laravel untuk menyisipkan data ke atribut HTML dengan aman
    // (escaping otomatis, tanpa risiko konflik dengan kutip ganda Alpine).
    $options = [
        'name' => $name,
        'credits' => false,
    ];

    if ($multiple) {
        $options['allowMultiple'] = true;
    }
    if ($acceptedFileTypes) {
        $options['acceptedFileTypes'] = $acceptedFileTypes;
    }
    if ($maxFileSize) {
        $options['maxFileSize'] = $maxFileSize;
    }
    if ($maxFiles) {
        $options['maxFiles'] = $maxFiles;
    }
    if ($labelIdle) {
        $options['labelIdle'] = $labelIdle;
    }
    if (!$allowImagePreview) {
        $options['allowImagePreview'] = false;
    }
    if ($disabled) {
        $options['disabled'] = true;
    }
    if ($server) {
        $options['server'] = $server;
    }
@endphp

{{--
    Integrasi mengikuti pola resmi FilePond untuk Alpine: elemen <input>
    native disembunyikan, FilePond.create() mengambil alih dan merender UI
    drag-drop/preview-nya sendiri di tempat yang sama. Instance disimpan di
    state Alpine (this.pond) supaya bisa dipanggil ulang dari luar
    (mis. this.pond.processFiles() untuk trigger upload manual).
--}}
<div wire:ignore x-data="filePondUploader(@js($options))" {{ $attributes->class(['w-full']) }}>
    <input type="file" x-ref="input" @if ($multiple) multiple @endif>
</div>
