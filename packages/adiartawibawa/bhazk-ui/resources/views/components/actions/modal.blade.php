@props([
    'id' => null, // wajib diisi jika ingin dibuka via trigger eksternal
    'size' => 'md', // sm, md, lg, xl, full
    'position' => 'middle', // top, middle, bottom
    'persistent' => false, // true = tidak bisa ditutup lewat backdrop click / Esc
])

@php
    $id = $id ?? 'modal-' . uniqid();

    $sizeClass = match ($size) {
        'sm' => 'max-w-sm',
        'md' => 'max-w-md',
        'lg' => 'max-w-lg',
        'xl' => 'max-w-xl',
        'full' => 'w-11/12 max-w-5xl',
        default => 'max-w-md',
    };

    $positionClass = match ($position) {
        'top' => 'modal-top',
        'bottom' => 'modal-bottom',
        default => 'modal-middle',
    };
@endphp

{{--
    Pakai elemen native <dialog> — showModal()/close() bawaan browser
    otomatis menangani focus-trap, scroll-lock body, dan layering
    (::backdrop) tanpa perlu JS manual. Alpine hanya dipakai untuk
    2 hal tipis: mode persistent (cegah tutup) dan integrasi event
    Livewire (buka/tutup terprogram lintas komponen).
--}}
<dialog id="{{ $id }}" x-data
    x-on:open-modal.window="if ($event.detail.id === '{{ $id }}') $el.showModal()"
    x-on:close-modal.window="if ($event.detail.id === '{{ $id }}') $el.close()"
    @if ($persistent) x-on:cancel.prevent
        x-on:click.self.prevent @endif
    {{ $attributes->class(['modal', $positionClass]) }}>
    <div class="modal-box {{ $sizeClass }}">
        @isset($header)
            <div class="flex items-start justify-between gap-4 mb-4">
                <h3 class="text-lg font-bold">{{ $header }}</h3>
                @unless ($persistent)
                    <form method="dialog">
                        <button class="btn btn-sm btn-circle btn-ghost" aria-label="Tutup">✕</button>
                    </form>
                @endunless
            </div>
        @endisset

        {{ $slot }}

        @isset($footer)
            <div class="modal-action">
                {{ $footer }}
            </div>
        @endisset
    </div>

    @unless ($persistent)
        {{-- Backdrop DaisyUI: form method="dialog" menutup <dialog> tanpa JS sama sekali --}}
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    @endunless
</dialog>
