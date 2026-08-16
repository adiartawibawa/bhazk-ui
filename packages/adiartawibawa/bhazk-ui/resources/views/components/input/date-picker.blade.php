@props([
    'id' => null, // wajib, unik — dipakai Popover API (sama seperti Megamenu)
    'placeholder' => 'Pilih tanggal',
    'value' => null,
])

@php
    $id = $id ?? 'datepicker-' . uniqid();
@endphp

{{-- Kombinasi input trigger + panel kalender, memakai Popover API + CSS
     Anchor Positioning — teknik yang sama seperti Megamenu. --}}
<button popovertarget="{{ $id }}" class="input" style="anchor-name:--{{ $id }}">
    {{ $value ?? $placeholder }}
</button>

<div popover id="{{ $id }}" class="dropdown bg-base-100 rounded-box shadow-lg"
    style="position-anchor:--{{ $id }}">
    <x-input.calendar {{ $attributes }} />
</div>
