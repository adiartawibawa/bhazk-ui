@props([
    'variant' => null, // bebas, tidak whitelist: primary, secondary, custom theme, dst
    'size' => 'md', // xs, sm, md, lg, xl
    'outline' => false,
    'soft' => false,
    'dash' => false,
    'glass' => false,
    'wide' => false,
    'block' => false,
    'circle' => false,
    'square' => false,
    'active' => false,
    'disabled' => false,
    'loading' => false, // fallback client-side: dikontrol manual, misal via Alpine (x-bind:loading)
    'spinner' => null, // server-driven: true/"1" = auto-detect wire:click, atau string = wire:target manual
    'icon' => null, // named slot ATAU attribute string (emoji/text)
    'type' => 'button',
    'href' => null,
    'xData' => null, // opsional: x-data custom untuk kasus loading client-side murni
])

@php
    /*
    |--------------------------------------------------------------------------
    | Size — lookup table, aman untuk Tailwind JIT karena semua value literal
    |--------------------------------------------------------------------------
    */
    $sizes = ['xs' => 'btn-xs', 'sm' => 'btn-sm', 'md' => null, 'lg' => 'btn-lg', 'xl' => 'btn-xl'];
    $size = array_key_exists($size, $sizes) ? $size : 'md';

    $loadingSizes = [
        'xs' => 'loading-xs',
        'sm' => 'loading-xs',
        'md' => 'loading-sm',
        'lg' => 'loading-md',
        'xl' => 'loading-lg',
    ];
    $loadingClass = $loadingSizes[$size];

    /*
    |--------------------------------------------------------------------------
    | Variant — WAJIB literal (match), bukan concatenation/slug runtime.
    | Tailwind JIT hanya generate CSS untuk teks yang ia temukan secara
    | harfiah di source file. String hasil concatenation PHP saat runtime
    | tidak pernah "terlihat" oleh scanner, sehingga class jadi hilang
    | tanpa error apa pun (silent bug).
    |
    | Default branch tetap terbuka untuk custom DaisyUI theme di luar 11
    | variant standar — tapi PENTING: custom value baru butuh entri
    | tambahan di @source inline() pada app.css supaya CSS-nya ter-compile.
    | Ini didokumentasikan di app.css, bukan disembunyikan di sini.
    |--------------------------------------------------------------------------
    */
    $variantClass = match ($variant) {
        'primary' => 'btn-primary',
        'secondary' => 'btn-secondary',
        'accent' => 'btn-accent',
        'neutral' => 'btn-neutral',
        'info' => 'btn-info',
        'success' => 'btn-success',
        'warning' => 'btn-warning',
        'error' => 'btn-error',
        'ghost' => 'btn-ghost',
        'link' => 'btn-link',
        null => null,
        default => 'btn-' . \Illuminate\Support\Str::slug($variant),
    };

    /*
    |--------------------------------------------------------------------------
    | Server-driven spinner target (Livewire)
    | spinner=1/true  -> auto-detect dari wire:click yang menempel di button
    | spinner="nama"  -> manual wire:target
    | Jika Livewire belum ter-install, ini tetap aman: atribut wire:* hanya
    | diteruskan sebagai HTML biasa tanpa efek fungsional.
    |--------------------------------------------------------------------------
    */
    $spinnerTarget = null;
    if ($spinner) {
        $spinnerTarget =
            $spinner === true || $spinner === '1' || $spinner === 1
                ? $attributes->whereStartsWith('wire:click')->first()
                : $spinner;
    }

    $tag = $href !== null ? 'a' : 'button';
    $isDisabled = $disabled;

    /*
    |--------------------------------------------------------------------------
    | Atribut tambahan hanya relevan untuk <button>. Dibangun sekali di sini
    | supaya tidak ada duplikasi 'type'/'disabled' di output HTML.
    |--------------------------------------------------------------------------
    */
    $extraAttributes = [];
    if ($tag === 'button') {
        $extraAttributes['type'] = $type;
        if ($isDisabled) {
            $extraAttributes['disabled'] = true;
        }
    }
@endphp

<{{ $tag }} @if ($xData) x-data="{{ $xData }}" @endif
    @if ($tag === 'a') href="{{ $isDisabled ? '#' : $href }}"
        @if ($isDisabled)
            aria-disabled="true"
            tabindex="-1"
            onclick="return false;" @endif
    @endif

    @if ($spinnerTarget) wire:target="{{ $spinnerTarget }}"
        wire:loading.attr="disabled" @endif

    {{ $attributes->merge($extraAttributes)->class([
        'btn',
        $variantClass,
        $sizes[$size],
        'btn-outline' => $outline,
        'btn-soft' => $soft,
        'btn-dash' => $dash,
        'glass' => $glass,
        'btn-wide' => $wide,
        'btn-block' => $block,
        'btn-circle' => $circle,
        'btn-square' => $square,
        'btn-active' => $active,
        // <a> tidak punya pseudo-class :disabled native, jadi visual disabled
        // harus dipaksa lewat class secara eksplisit.
        'btn-disabled' => $isDisabled && $tag === 'a',
    ]) }}
    >
    @if ($spinnerTarget)
        <span wire:loading wire:target="{{ $spinnerTarget }}" class="loading loading-spinner {{ $loadingClass }}"></span>
        <span wire:loading.remove wire:target="{{ $spinnerTarget }}">
            @if ($icon)
                <span class="inline-flex items-center">{{ $icon }}</span>
            @endif
        </span>
    @elseif ($loading)
        <span class="loading loading-spinner {{ $loadingClass }}"></span>
    @elseif ($icon)
        <span class="inline-flex items-center">{{ $icon }}</span>
    @endif

    @if ($spinnerTarget)
        <span wire:loading.remove wire:target="{{ $spinnerTarget }}">{{ $slot }}</span>
        <span wire:loading wire:target="{{ $spinnerTarget }}">{{ $slot }}</span>
    @else
        {{ $slot }}
    @endif
    </{{ $tag }}>
