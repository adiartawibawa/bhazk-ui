<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Input</span>
        <h1 class="text-3xl font-bold">Toggle</h1>
        <p class="text-base-content/70 mt-2">Sakelar on/off — visualnya berbeda dari checkbox biasa meski secara teknis
            sama-sama <code>&lt;input type="checkbox"&gt;</code>.</p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Pengaturan dengan Card</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100">
            <x-data-display.card class="bg-base-200 w-72" border>
                <x-slot:title>Pengaturan</x-slot:title>
                <div class="space-y-2">
                    <x-input.toggle variant="primary" label="Mode Gelap" />
                    <x-input.toggle variant="success" label="Notifikasi" checked />
                    <x-input.toggle variant="error" label="Mode Berbahaya" />
                </div>
            </x-data-display.card>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Digabung dengan <code>&lt;x-data-display.card&gt;</code> — pola umum
            panel pengaturan aplikasi.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Varian Warna</h2>
            <div class="flex flex-wrap gap-4">
                @foreach (['neutral', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error'] as $variant)
                    <x-input.toggle :variant="$variant" checked />
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Ukuran</h2>
            <div class="flex flex-wrap items-center gap-4">
                @foreach (['xs', 'sm', 'md', 'lg', 'xl'] as $size)
                    <x-input.toggle variant="primary" :size="$size" checked />
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Disabled</h2>
            <div class="flex gap-4">
                <x-input.toggle disabled />
                <x-input.toggle disabled checked />
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-input.toggle variant="success" label="Mode Gelap" wire:model="darkMode" /&gt;</code></pre>
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
                        <td><code>variant</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>neutral, primary, secondary, accent, info, success, warning, error</td>
                    </tr>
                    <tr>
                        <td><code>size</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>xs, sm, md, lg, xl</td>
                    </tr>
                    <tr>
                        <td><code>label</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>Teks di samping toggle</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
