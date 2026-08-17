@props([
    'horizontal' => 'end',
    'vertical' => 'bottom',
])

@php
    $hClass = match ($horizontal) {
        'start' => 'toast-start',
        'center' => 'toast-center',
        'end' => 'toast-end',
        default => null,
    };
    $vClass = match ($vertical) {
        'top' => 'toast-top',
        'middle' => 'toast-middle',
        'bottom' => 'toast-bottom',
        default => null,
    };
@endphp

{{--
    Sistem notifikasi dinamis. Taruh SEKALI di layout utama, lalu trigger
    dari mana saja (tombol biasa, atau $dispatch Livewire) lewat event
    browser global "toast" — pola yang sama seperti open-modal/close-modal
    pada komponen Modal.

    Trigger manual: window.dispatchEvent(new CustomEvent('toast', {
        detail: { message: 'Berhasil disimpan!', variant: 'success' }
    }))
--}}
<div x-data="{
    items: [],
    add(message, variant, duration) {
        const id = Date.now() + Math.random();
        this.items.push({ id, message, variant: variant || 'info' });
        setTimeout(() => this.remove(id), duration || 3000);
    },
    remove(id) { this.items = this.items.filter(i => i.id !== id); }
}" x-on:toast.window="add($event.detail.message, $event.detail.variant, $event.detail.duration)"
    {{ $attributes->class(['toast', $hClass, $vClass]) }}>
    <template x-for="item in items" :key="item.id">
        <div role="alert" class="alert"
            x-bind:class="{
                'alert-info': item.variant === 'info',
                'alert-success': item.variant === 'success',
                'alert-warning': item.variant === 'warning',
                'alert-error': item.variant === 'error',
            }"
            x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-x-4"
            x-transition:enter-end="opacity-100 translate-x-0" x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
            <span x-text="item.message"></span>
            <button type="button" class="btn btn-ghost btn-xs btn-circle" x-on:click="remove(item.id)"
                aria-label="Tutup">✕</button>
        </div>
    </template>
</div>
