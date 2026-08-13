<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Actions</span>
        <h1 class="text-3xl font-bold">Swap</h1>
        <p class="text-base-content/70 mt-2">
            Toggle antara dua tampilan (mis. icon play/pause, hamburger/close).
            Murni berbasis CSS <code>&lt;input type="checkbox"&gt;</code> — tanpa
            Alpine — sehingga otomatis kompatibel dengan <code>wire:model</code>.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview</h2>
        <div class="border border-base-300 rounded-box p-8 flex flex-wrap items-center gap-6 bg-base-100">
            <x-actions.swap effect="rotate">
                <x-slot:on>😈</x-slot:on>
                <x-slot:off>😇</x-slot:off>
            </x-actions.swap>

            <x-actions.swap effect="flip">
                <x-slot:on>ON</x-slot:on>
                <x-slot:off>OFF</x-slot:off>
            </x-actions.swap>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Contoh: Hamburger Menu</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100">
            <x-actions.swap effect="rotate" class="text-4xl">
                <x-slot:on>✕</x-slot:on>
                <x-slot:off>☰</x-slot:off>
            </x-actions.swap>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-actions.swap effect="rotate" wire:model="isDarkMode"&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;x-slot:on&gt;🌙&lt;/x-slot:on&gt;</code></pre>
            <pre data-prefix="3"><code>    &lt;x-slot:off&gt;☀️&lt;/x-slot:off&gt;</code></pre>
            <pre data-prefix="4"><code>&lt;/x-actions.swap&gt;</code></pre>
        </div>

        <div class="overflow-x-auto mt-6">
            <table class="table">
                <thead>
                    <tr>
                        <th>Prop</th>
                        <th>Tipe</th>
                        <th>Default</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>effect</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>rotate, flip</td>
                    </tr>
                    <tr>
                        <td><code>checked</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>State awal saat render pertama</td>
                    </tr>
                    <tr>
                        <td><code>on</code> / <code>off</code> <span class="text-base-content/50">(slot)</span></td>
                        <td>slot</td>
                        <td>—</td>
                        <td>Wajib diisi keduanya</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
