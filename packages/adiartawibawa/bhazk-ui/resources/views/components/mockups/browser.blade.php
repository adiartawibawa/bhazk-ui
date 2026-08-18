@props([
    'url' => null, // teks yang tampil di address bar
])

<div {{ $attributes->class(['mockup-browser', 'border', 'border-base-300']) }}>
    <div class="mockup-browser-toolbar">
        <div class="input">{{ $url }}</div>
    </div>
    <div class="border-t border-base-300">
        {{ $slot }}
    </div>
</div>
