@props([
    'first' => false, // true jika item pertama (tanpa garis sebelum)
    'last' => false, // true jika item terakhir (tanpa garis sesudah)
    'lineColor' => null, // primary, secondary, accent, neutral, info, success, warning, error
    'box' => false, // terapkan gaya kotak (timeline-box) ke start/end
    'startClass' => null, // class tambahan untuk div timeline-start (mis. spacing snap-icon)
    'endClass' => null, // class tambahan untuk div timeline-end
])

@php
    $lineClass = match ($lineColor) {
        'primary' => 'bg-primary',
        'secondary' => 'bg-secondary',
        'accent' => 'bg-accent',
        'neutral' => 'bg-neutral',
        'info' => 'bg-info',
        'success' => 'bg-success',
        'warning' => 'bg-warning',
        'error' => 'bg-error',
        default => null,
    };

    $startClasses = trim('timeline-start ' . ($box ? 'timeline-box ' : '') . $startClass);
    $endClasses = trim('timeline-end ' . ($box ? 'timeline-box ' : '') . $endClass);
@endphp

<li {{ $attributes }}>
    @unless ($first)
        <hr class="{{ $lineClass }}" />
    @endunless

    @isset($middle)
        <div class="timeline-middle">{{ $middle }}</div>
    @endisset

    @isset($start)
        <div class="{{ $startClasses }}">{{ $start }}</div>
    @endisset

    @isset($end)
        <div class="{{ $endClasses }}">{{ $end }}</div>
    @endisset

    @unless ($last)
        <hr class="{{ $lineClass }}" />
    @endunless
</li>
