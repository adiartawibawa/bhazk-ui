@props([
    'size' => null, // xs, sm, md, lg, xl
    'side' => false, // gambar di samping, bukan di atas
    'imageFull' => false, // gambar jadi background penuh
    'border' => false,
    'dash' => false,
])

@php
    $sizeClass = match ($size) {
        'xs' => 'card-xs',
        'sm' => 'card-sm',
        'md' => 'card-md',
        'lg' => 'card-lg',
        'xl' => 'card-xl',
        default => null,
    };
@endphp

<div
    {{ $attributes->class([
        'card',
        $sizeClass,
        'card-side' => $side,
        'image-full' => $imageFull,
        'card-border' => $border,
        'card-dash' => $dash,
    ]) }}>
    @isset($figure)
        <figure>{{ $figure }}</figure>
    @endisset

    <div class="card-body">
        @isset($title)
            <h2 class="card-title">{{ $title }}</h2>
        @endisset

        {{ $slot }}

        @isset($actions)
            <div class="card-actions justify-end">
                {{ $actions }}
            </div>
        @endisset
    </div>
</div>
