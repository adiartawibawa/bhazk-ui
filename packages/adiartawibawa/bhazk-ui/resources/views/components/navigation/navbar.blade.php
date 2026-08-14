@props([])

<div {{ $attributes->class(['navbar']) }}>
    @isset($start)
        <div class="navbar-start">{{ $start }}</div>
    @endisset

    @isset($center)
        <div class="navbar-center">{{ $center }}</div>
    @endisset

    @isset($end)
        <div class="navbar-end">{{ $end }}</div>
    @endisset
</div>
