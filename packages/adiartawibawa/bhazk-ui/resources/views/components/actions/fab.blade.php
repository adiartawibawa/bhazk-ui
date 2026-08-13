@props([
    'position' => 'bottom-right', // bottom-right, bottom-left, top-right, top-left
    'variant' => 'primary', // warna tombol utama (trigger)
    'mode' => null, // null, close, main-action — TIDAK boleh dipakai bersamaan
    'flower' => false, // buka dalam bentuk quarter-circle, bukan vertikal
    'closeLabel' => null, // teks label opsional di samping tombol close (mode: close)
])

@php
    $positionClass = match ($position) {
        'bottom-left' => 'fixed bottom-4 left-4',
        'top-right' => 'fixed top-4 right-4',
        'top-left' => 'fixed top-4 left-4',
        default => 'fixed bottom-4 right-4', // bottom-right
    };

    $variantClass = match ($variant) {
        'primary' => 'btn-primary',
        'secondary' => 'btn-secondary',
        'accent' => 'btn-accent',
        'neutral' => 'btn-neutral',
        'info' => 'btn-info',
        'success' => 'btn-success',
        'warning' => 'btn-warning',
        'error' => 'btn-error',
        default => 'btn-primary',
    };

    /*
    |--------------------------------------------------------------------------
    | mode="close" dan mode="main-action" saling eksklusif — sesuai spesifikasi
    | resmi DaisyUI 5 ("Either use fab-close or fab-main-action, not both").
    | Guard ini mencegah dev tanpa sengaja mengaktifkan keduanya.
    |--------------------------------------------------------------------------
    */
    if ($mode !== null && !in_array($mode, ['close', 'main-action'], true)) {
        $mode = null;
    }
@endphp

<div {{ $attributes->class(['fab', $positionClass, 'fab-flower' => $flower]) }}>
    {{-- Trigger utama — div (bukan button) sebagai workaround Safari focus bug, sesuai rekomendasi resmi DaisyUI --}}
    <div tabindex="0" role="button" class="btn btn-lg btn-circle {{ $variantClass }}">
        {{ $trigger }}
    </div>

    @if ($mode === 'close')
        {{-- Placeholder visual, sengaja TANPA tabindex/role agar tidak focusable —
             klik di area ini menutup FAB karena fokus berpindah keluar komponen --}}
        <div class="fab-close">
            @if ($closeLabel)
                {{ $closeLabel }}
            @endif
            <span class="btn btn-circle btn-lg btn-error">✕</span>
        </div>
    @elseif ($mode === 'main-action')
        <div class="fab-main-action">
            {{ $mainAction }}
        </div>
    @endif

    {{-- Item aksi (Speed Dial buttons) — konsumen menyediakan langsung,
         boleh <button class="btn btn-lg btn-circle">, dengan label
         pembungkus <div>Label ...</div>, atau dengan tooltip untuk mode flower --}}
    {{ $slot }}
</div>
