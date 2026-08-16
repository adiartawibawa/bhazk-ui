<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Input</span>
        <h1 class="text-3xl font-bold">Rating</h1>
        <p class="text-base-content/70 mt-2">Memberi nilai konten dalam bentuk bintang penuh atau setengah.</p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — dalam Card Produk</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100">
            <x-data-display.card class="bg-base-200 w-64" border>
                <x-slot:title>
                    Sepatu Lari
                    <x-data-display.badge variant="success" size="sm">Baru</x-data-display.badge>
                </x-slot:title>
                <x-input.rating value="4" readonly size="sm" />
                <p class="text-sm text-base-content/60">4.0 dari 120 ulasan</p>
                <x-slot:actions>
                    <x-actions.button variant="primary" size="sm">Beli</x-actions.button>
                </x-slot:actions>
            </x-data-display.card>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            <code>readonly</code> dipakai untuk menampilkan rating rata-rata
            (tidak bisa diubah pengguna), digabung dengan
            <code>&lt;x-data-display.card&gt;</code>, <code>badge</code>, dan <code>button</code>.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Interaktif (Beri Ulasan)</h2>
            <x-input.rating name="ulasan-produk" value="0" />
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Setengah Bintang</h2>
            <x-input.rating half value="3.5" readonly color="bg-green-500" />
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Bentuk Lain (Heart)</h2>
            <x-input.rating shape="heart" value="3" color="bg-red-400" />
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Ukuran</h2>
            <div class="flex flex-col gap-3">
                @foreach (['xs', 'sm', 'md', 'lg', 'xl'] as $size)
                    <x-input.rating :size="$size" value="3" readonly />
                @endforeach
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-input.rating name="ulasan" value="4" wire:model="rating" /&gt;</code></pre>
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
                        <td>string|null</td>
                        <td>auto</td>
                        <td>Grup radio, harus unik per instance</td>
                    </tr>
                    <tr>
                        <td><code>max</code></td>
                        <td>int</td>
                        <td>5</td>
                        <td>Jumlah bintang</td>
                    </tr>
                    <tr>
                        <td><code>value</code></td>
                        <td>float</td>
                        <td>0</td>
                        <td>Nilai terisi saat ini</td>
                    </tr>
                    <tr>
                        <td><code>size</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>xs, sm, md, lg, xl</td>
                    </tr>
                    <tr>
                        <td><code>half</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>Mode setengah bintang</td>
                    </tr>
                    <tr>
                        <td><code>shape</code></td>
                        <td>string</td>
                        <td>star-2</td>
                        <td>star, star-2, heart, dll</td>
                    </tr>
                    <tr>
                        <td><code>color</code></td>
                        <td>string</td>
                        <td>bg-orange-400</td>
                        <td>Class warna fill Tailwind</td>
                    </tr>
                    <tr>
                        <td><code>readonly</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>Tidak bisa diubah, untuk tampilan rata-rata</td>
                    </tr>
                    <tr>
                        <td><code>clearable</code></td>
                        <td>bool</td>
                        <td>true</td>
                        <td>Sertakan opsi reset ke 0</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
