@props([])

<div {{ $attributes->class(['mockup-window', 'border', 'border-base-300']) }}>
    <div class="border-t border-base-300">
        {{ $slot }}
    </div>
</div>
