@props([
    'legend' => null, // judul fieldset
    'description' => null, // teks deskripsi kecil di bawah field
])

<fieldset {{ $attributes->class(['fieldset']) }}>
    @if ($legend)
        <legend class="fieldset-legend">{{ $legend }}</legend>
    @endif

    {{ $slot }}

    @if ($description)
        <p class="label">{{ $description }}</p>
    @endif
</fieldset>
