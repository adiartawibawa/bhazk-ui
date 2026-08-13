@props([])

<div {{ $attributes->class(['stat']) }}>
    @isset($figure)
        <div class="stat-figure">{{ $figure }}</div>
    @endisset

    @isset($title)
        <div class="stat-title">{{ $title }}</div>
    @endisset

    @isset($value)
        <div class="stat-value">{{ $value }}</div>
    @endisset

    @isset($desc)
        <div class="stat-desc">{{ $desc }}</div>
    @endisset

    @isset($actions)
        <div class="stat-actions">{{ $actions }}</div>
    @endisset
</div>
