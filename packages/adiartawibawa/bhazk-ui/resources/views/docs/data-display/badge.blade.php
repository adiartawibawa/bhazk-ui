<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Data Display</span>
        <h1 class="text-3xl font-bold">Badge</h1>
        <p class="text-base-content/70 mt-2">
            Label kecil untuk menandai status, jumlah, atau kategori suatu data.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Dipasangkan dengan Button</h2>
        <div class="border border-base-300 rounded-box p-8 flex flex-wrap items-center gap-4 bg-base-100">
            <x-actions.button variant="outline">
                Notifikasi
                <x-data-display.badge variant="secondary" size="sm">+99</x-data-display.badge>
            </x-actions.button>

            <x-actions.button variant="ghost">
                Pesan
                <x-data-display.badge variant="error" size="sm">3</x-data-display.badge>
            </x-actions.button>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Menunjukkan komposisi <code>&lt;x-data-display.badge&gt;</code> di dalam
            <code>&lt;x-actions.button&gt;</code> — dua komponen berbeda kategori tetap
            saling kompatibel tanpa konflik style.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Varian Warna</h2>
            <div class="flex flex-wrap gap-3">
                @foreach (['neutral', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error'] as $variant)
                    <x-data-display.badge :variant="$variant">{{ ucfirst($variant) }}</x-data-display.badge>
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Style</h2>
            <div class="flex flex-wrap gap-3">
                <x-data-display.badge variant="primary" style="outline">Outline</x-data-display.badge>
                <x-data-display.badge variant="primary" style="ghost">Ghost</x-data-display.badge>
                <x-data-display.badge variant="primary" style="soft">Soft</x-data-display.badge>
                <x-data-display.badge variant="primary" style="dash">Dash</x-data-display.badge>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Ukuran</h2>
            <div class="flex flex-wrap items-center gap-3">
                @foreach (['xs', 'sm', 'md', 'lg', 'xl'] as $size)
                    <x-data-display.badge variant="primary"
                        :size="$size">{{ strtoupper($size) }}</x-data-display.badge>
                @endforeach
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-data-display.badge variant="success" size="sm"&gt;</code></pre>
            <pre data-prefix="2"><code>    Aktif</code></pre>
            <pre data-prefix="3"><code>&lt;/x-data-display.badge&gt;</code></pre>
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
                        <td><code>style</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>outline, ghost, soft, dash</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
