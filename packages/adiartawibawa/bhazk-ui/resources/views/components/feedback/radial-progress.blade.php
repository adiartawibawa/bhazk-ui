@props([
    'value' => 0, // 0-100
    'color' => null, // primary, secondary, accent, neutral, info, success, warning, error
    'size' => null, // custom --size, mis. "6rem"
    'thickness' => null, // custom --thickness, mis. "2px"
])

@php
    $colorClass = match ($color) {
        'primary' => 'text-primary',
        'secondary' => 'text-secondary',
        'accent' => 'text-accent',
        'neutral' => 'text-neutral',
        'info' => 'text-info',
        'success' => 'text-success',
        'warning' => 'text-warning',
        'error' => 'text-error',
        null => null,
        default => 'text-' . \Illuminate\Support\Str::slug($color),
    };

    $styleParts = collect(["--value:{$value}"]);
    if ($size) {
        $styleParts->push("--size:{$size}");
    }
    if ($thickness) {
        $styleParts->push("--thickness:{$thickness}");
    }
    $styleAttr = $styleParts->implode('; ') . ';';
@endphp

<div role="progressbar" aria-valuenow="{{ $value }}" aria-valuemin="0" aria-valuemax="100" style="{{ $styleAttr }}"
    {{ $attributes->class(['radial-progress', $colorClass]) }}>
    {{ $slot }}
</div>
