<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Layout</span>
        <h1 class="text-3xl font-bold">Divider</h1>
        <p class="text-base-content/70 mt-2">
            Garis pemisah antar konten, vertikal maupun horizontal, dengan
            teks opsional di tengahnya.
        </p>
    </div>

    {{-- Live Preview --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — antara Dua Card</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100">
            <div class="flex w-full flex-col">
                <x-data-display.card class="bg-base-300 grid h-20 place-items-center">
                    Login dengan Email
                </x-data-display.card>
                <x-layout.divider>ATAU</x-layout.divider>
                <x-data-display.card class="bg-base-300 grid h-20 place-items-center">
                    <x-actions.button variant="primary" size="sm">Login dengan Google</x-actions.button>
                </x-data-display.card>
            </div>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Memisahkan dua <code>&lt;x-data-display.card&gt;</code> — salah satunya
            berisi <code>&lt;x-actions.button&gt;</code>.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Varian Warna</h2>
            <div class="flex w-full flex-col max-w-md">
                @foreach (['neutral', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error'] as $variant)
                    <x-layout.divider :variant="$variant">{{ ucfirst($variant) }}</x-layout.divider>
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Posisi Teks</h2>
            <div class="flex w-full flex-col max-w-md">
                <x-layout.divider position="start">Start</x-layout.divider>
                <x-layout.divider>Default (Tengah)</x-layout.divider>
                <x-layout.divider position="end">End</x-layout.divider>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Horizontal</h2>
            <div class="flex w-full justify-center h-52 max-w-md">
                <x-data-display.card class="bg-base-300 grid flex-grow place-items-center">A</x-data-display.card>
                <x-layout.divider direction="horizontal">ATAU</x-layout.divider>
                <x-data-display.card class="bg-base-300 grid flex-grow place-items-center">B</x-data-display.card>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Tanpa Teks</h2>
            <div class="flex w-full flex-col max-w-md">
                <x-data-display.card class="bg-base-300 h-16 grid place-items-center">Bagian 1</x-data-display.card>
                <x-layout.divider />
                <x-data-display.card class="bg-base-300 h-16 grid place-items-center">Bagian 2</x-data-display.card>
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-layout.divider variant="primary" position="start"&gt;ATAU&lt;/x-layout.divider&gt;</code></pre>
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
                        <td><code>direction</code></td>
                        <td>string|null</td>
                        <td>vertical</td>
                        <td>vertical (default), horizontal</td>
                    </tr>
                    <tr>
                        <td><code>position</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>start, end — posisi teks (default: tengah)</td>
                    </tr>
                    <tr>
                        <td><code>$slot</code></td>
                        <td>slot</td>
                        <td>—</td>
                        <td>Opsional — teks di tengah garis</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
