<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Feedback</span>
        <h1 class="text-3xl font-bold">Loading</h1>
        <p class="text-base-content/70 mt-2">Indikator animasi untuk state sedang memuat.</p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — dalam Card</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 flex justify-center">
            <x-data-display.card class="bg-base-200 w-64 items-center text-center" border>
                <x-feedback.loading type="dots" size="lg" color="primary" />
                <p class="text-sm text-base-content/60">Memuat data...</p>
            </x-data-display.card>
        </div>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Tipe Animasi</h2>
            <div class="flex flex-wrap items-center gap-6">
                @foreach (['spinner', 'dots', 'ring', 'ball', 'bars', 'infinity'] as $type)
                    <div class="flex flex-col items-center gap-2">
                        <x-feedback.loading :type="$type" size="lg" />
                        <span class="text-xs text-base-content/60">{{ ucfirst($type) }}</span>
                    </div>
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Ukuran</h2>
            <div class="flex flex-wrap items-center gap-6">
                @foreach (['xs', 'sm', 'md', 'lg', 'xl'] as $size)
                    <x-feedback.loading :size="$size" />
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Warna</h2>
            <div class="flex flex-wrap items-center gap-6">
                @foreach (['primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error'] as $color)
                    <x-feedback.loading type="spinner" size="lg" :color="$color" />
                @endforeach
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-feedback.loading type="dots" size="lg" color="primary" /&gt;</code></pre>
        </div>

        <div role="alert" class="alert alert-info mt-4 text-sm">
            <span>
                Komponen <code>&lt;x-actions.button loading&gt;</code> sudah punya
                spinner bawaan sendiri (otomatis proporsional ke ukuran tombol) —
                gunakan komponen ini untuk indikator loading yang berdiri sendiri
                di luar tombol.
            </span>
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
                        <td><code>type</code></td>
                        <td>string</td>
                        <td>spinner</td>
                        <td>spinner, dots, ring, ball, bars, infinity</td>
                    </tr>
                    <tr>
                        <td><code>size</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>xs, sm, md, lg, xl</td>
                    </tr>
                    <tr>
                        <td><code>color</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>primary, secondary, accent, neutral, info, success, warning, error</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
