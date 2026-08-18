@props([])

<div {{ $attributes->class(['mockup-phone']) }}>
    <div class="mockup-phone-camera"></div>
    <div class="mockup-phone-display">
        {{ $slot }}
    </div>
</div>
