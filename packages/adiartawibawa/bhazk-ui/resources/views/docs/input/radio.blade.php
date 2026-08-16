<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Input</span>
        <h1 class="text-3xl font-bold">Radio</h1>
        <p class="text-base-content/70 mt-2">Memilih satu opsi dari sekelompok pilihan.</p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Pilih Paket dengan Card & Badge</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 flex flex-wrap gap-4">
            <label>
                <x-data-display.card class="bg-base-200 w-48 cursor-pointer" border>
                    <div class="flex items-center justify-between">
                        <span class="font-bold">Basic</span>
                        <x-input.radio name="paket" variant="primary" checked />
                    </div>
                    <p class="text-sm">Rp0/bulan</p>
                </x-data-display.card>
            </label>
            <label>
                <x-data-display.card class="bg-base-200 w-48 cursor-pointer" border>
                    <div class="flex items-center justify-between">
                        <span class="font-bold">Pro</span>
                        <x-input.radio name="paket" variant="primary" />
                    </div>
                    <x-data-display.badge variant="secondary" size="sm">Populer</x-data-display.badge>
                    <p class="text-sm">Rp99rb/bulan</p>
                </x-data-display.card>
            </label>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Menggabungkan <code>&lt;x-data-display.card&gt;</code> dan
            <code>&lt;x-data-display.badge&gt;</code> — pola umum kartu pilihan paket harga.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Varian Warna</h2>
            <div class="flex flex-wrap gap-4">
                @foreach (['neutral', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error'] as $variant)
                    <x-input.radio :name="'radio-' . $variant" :variant="$variant" checked />
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Ukuran</h2>
            <div class="flex flex-wrap items-center gap-4">
                @foreach (['xs', 'sm', 'md', 'lg', 'xl'] as $size)
                    <x-input.radio :name="'radio-size-' . $size" variant="primary" :size="$size" checked />
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Dengan Label</h2>
            <div class="flex flex-col gap-2 max-w-xs">
                <x-input.radio name="metode" variant="primary" label="Transfer Bank" checked />
                <x-input.radio name="metode" variant="primary" label="E-Wallet" />
                <x-input.radio name="metode" variant="primary" label="Kartu Kredit" />
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Disabled</h2>
            <div class="flex gap-4">
                <x-input.radio name="radio-disabled" disabled />
                <x-input.radio name="radio-disabled" disabled checked />
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-input.radio name="paket" variant="primary" label="Basic" wire:model="paket" value="basic" /&gt;</code></pre>
            <pre data-prefix="2"><code>&lt;x-input.radio name="paket" variant="primary" label="Pro" wire:model="paket" value="pro" /&gt;</code></pre>
        </div>

        <div role="alert" class="alert alert-warning mt-4 text-sm">
            <span>
                <code>name</code> pada seluruh <code>&lt;x-input.radio&gt;</code> dalam
                satu grup harus <strong>identik</strong> — sama seperti prinsip pada
                komponen Accordion dan Tab.
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
                        <td><code>name</code></td>
                        <td>string</td>
                        <td>— (wajib)</td>
                        <td>Grup radio</td>
                    </tr>
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
                        <td>Teks di samping radio</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
