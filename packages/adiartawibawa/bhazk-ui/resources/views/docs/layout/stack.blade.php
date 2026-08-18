<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Layout</span>
        <h1 class="text-3xl font-bold">Stack</h1>
        <p class="text-base-content/70 mt-2">Menumpuk beberapa elemen di atas satu sama lain — seperti tumpukan kartu.
        </p>
    </div>

    <div role="alert" class="alert alert-warning mb-10 text-sm">
        <span>
            Di DaisyUI 5, lebar/tinggi diatur pada elemen <code>stack</code> itu
            sendiri (lewat class <code>w-*</code>/<code>h-*</code>), <strong>bukan</strong>
            lagi di tiap child seperti versi sebelumnya.
        </span>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Tumpukan Card</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 flex justify-center">
            <x-layout.stack class="w-56 h-32">
                <x-data-display.card class="bg-primary text-primary-content shadow-md">1</x-data-display.card>
                <x-data-display.card class="bg-accent text-accent-content shadow-md">2</x-data-display.card>
                <x-data-display.card class="bg-base-300 shadow">3</x-data-display.card>
            </x-layout.stack>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Menumpuk 3 <code>&lt;x-data-display.card&gt;</code> — hanya kartu paling
            atas yang sepenuhnya terlihat.
        </p>
    </section>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Tumpukan Foto</h2>
        <x-layout.stack class="w-32 h-32">
            <img src="https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.webp" class="rounded-box"
                alt="1" />
            <img src="https://img.daisyui.com/images/stock/photo-1565098772267-60af42b81ef2.webp" class="rounded-box"
                alt="2" />
            <img src="https://img.daisyui.com/images/stock/photo-1572635148818-ef6fd45eb394.webp" class="rounded-box"
                alt="3" />
        </x-layout.stack>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-layout.stack class="w-56 h-32"&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;x-data-display.card&gt;1&lt;/x-data-display.card&gt;</code></pre>
            <pre data-prefix="3"><code>    &lt;x-data-display.card&gt;2&lt;/x-data-display.card&gt;</code></pre>
            <pre data-prefix="4"><code>&lt;/x-layout.stack&gt;</code></pre>
        </div>
    </section>
</x-layouts.docs>
