@props([
    'name' => null, // WAJIB diisi manual saat pemakaian — grup radio
    'label' => null, // WAJIB diisi manual saat pemakaian — teks tab
    'active' => false,
    'disabled' => false,
    'contentClass' => 'bg-base-100 border-base-300 p-6',
])

<input type="radio" name="{{ $name }}" aria-label="{{ $label }}" @checked($active)
    @disabled($disabled) {{ $attributes->class(['tab']) }} />
<div class="tab-content {{ $contentClass }}">
    {{ $slot }}
</div>
