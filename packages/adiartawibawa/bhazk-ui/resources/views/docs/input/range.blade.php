<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Input</span>
        <h1 class="text-3xl font-bold">Range</h1>
        <p class="text-base-content/70 mt-2">Slider untuk memilih nilai numerik dalam rentang tertentu.</p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Pengaturan dengan Card</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100">
            <x-data-display.card class="bg-base-200 w-72" border>
                <x-slot:title>Audio</x-slot:title>
                <div class="space-y-4">
                    <div>
                        <label class="label">🔊 Volume</label>
                        <x-input.range variant="primary" value="65" />
                    </div>
                    <div>
                        <label class="label">☀️ Kecerahan</label>
                        <x-input.range variant="accent" value="80" />
                    </div>
                </div>
            </x-data-display.card>
        </div>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Varian Warna</h2>
            <div class="flex flex-col gap-4 max-w-xs">
                @foreach (['neutral', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error'] as $variant)
                    <x-input.range :variant="$variant" value="40" />
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Ukuran</h2>
            <div class="flex flex-col gap-4 max-w-xs">
                @foreach (['xs', 'sm', 'md', 'lg', 'xl'] as $size)
                    <x-input.range variant="primary" :size="$size" value="50" />
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Dengan Step & Tick Marks</h2>
            <div class="max-w-xs">
                <x-input.range min="0" max="100" step="25" value="25" />
                <div class="flex justify-between px-2.5 mt-2 text-xs">
                    <span>|</span><span>|</span><span>|</span><span>|</span><span>|</span>
                </div>
                <div class="flex justify-between px-2.5 mt-2 text-xs">
                    <span>0</span><span>25</span><span>50</span><span>75</span><span>100</span>
                </div>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Vertikal</h2>
            <div class="h-48 flex items-center">
                <x-input.range variant="secondary" vertical value="60" />
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-input.range variant="primary" min="0" max="100" value="60" wire:model="volume" /&gt;</code></pre>
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
                        <td><code>vertical</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>Slider vertikal</td>
                    </tr>
                    <tr>
                        <td><code>min</code> / <code>max</code></td>
                        <td>int</td>
                        <td>0 / 100</td>
                        <td>Batas nilai</td>
                    </tr>
                    <tr>
                        <td><code>step</code></td>
                        <td>int|null</td>
                        <td>null</td>
                        <td>Kelipatan lompatan nilai</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
