<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Input</span>
        <h1 class="text-3xl font-bold">Checkbox</h1>
        <p class="text-base-content/70 mt-2">Memilih satu atau lebih opsi dari daftar.</p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — dengan Button</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100">
            <div class="space-y-2 max-w-xs">
                <x-input.checkbox variant="primary" label="Notifikasi email" checked />
                <x-input.checkbox variant="primary" label="Notifikasi push" />
                <x-input.checkbox variant="primary" label="Newsletter mingguan" />
            </div>
            <x-actions.button variant="primary" size="sm" class="mt-4">Simpan Preferensi</x-actions.button>
        </div>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Varian Warna</h2>
            <div class="flex flex-wrap gap-4">
                @foreach (['neutral', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error'] as $variant)
                    <x-input.checkbox :variant="$variant" checked />
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Ukuran</h2>
            <div class="flex flex-wrap items-center gap-4">
                @foreach (['xs', 'sm', 'md', 'lg', 'xl'] as $size)
                    <x-input.checkbox variant="primary" :size="$size" checked />
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Indeterminate</h2>
            <x-input.checkbox variant="primary" label="Pilih semua (sebagian terpilih)" indeterminate />
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Disabled</h2>
            <div class="flex gap-4">
                <x-input.checkbox disabled />
                <x-input.checkbox disabled checked />
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-input.checkbox variant="primary" label="Setuju dengan Syarat" wire:model="agree" /&gt;</code></pre>
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
                        <td>Teks di samping checkbox</td>
                    </tr>
                    <tr>
                        <td><code>indeterminate</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>State "sebagian terpilih"</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
