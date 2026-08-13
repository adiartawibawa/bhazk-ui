@props([
    'spacing' => '-space-x-6', // negative margin literal — token dari consumer
])

<div {{ $attributes->class(['avatar-group', $spacing]) }}>
    {{ $slot }}
</div>
