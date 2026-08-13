<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Data Display</span>
        <h1 class="text-3xl font-bold">Card</h1>
        <p class="text-base-content/70 mt-2">
            Mengelompokkan konten (gambar, judul, deskripsi, aksi) dalam satu unit yang mudah dibaca.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100">
            <x-data-display.card class="bg-base-100 w-96 shadow-sm" border>
                <x-slot:figure>
                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400&h=400&fit=crop"
                        alt="Sepatu" />
                </x-slot:figure>

                <x-slot:title>
                    Sepatu Edisi Terbatas
                    <x-data-display.badge variant="secondary">Baru</x-data-display.badge>
                </x-slot:title>

                <p>Kombinasi kenyamanan dan gaya untuk aktivitas sehari-hari.</p>

                <x-slot:actions>
                    <x-actions.button variant="primary">Beli Sekarang</x-actions.button>
                </x-slot:actions>
            </x-data-display.card>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Menggabungkan <code>&lt;x-data-display.badge&gt;</code> di judul dan
            <code>&lt;x-actions.button&gt;</code> di area aksi — bukti komposisi lintas komponen berjalan mulus.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Card Side (Gambar di Samping)</h2>
            <x-data-display.card class="bg-base-100 shadow-sm" side>
                <x-slot:figure>
                    <img src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.webp" alt="Film"
                        class="h-full object-cover" />
                </x-slot:figure>
                <x-slot:title>Film Baru Dirilis!</x-slot:title>
                <p>Klik tombol untuk menonton di aplikasi Jetflix.</p>
                <x-slot:actions>
                    <x-actions.button variant="primary" size="sm">Tonton</x-actions.button>
                </x-slot:actions>
            </x-data-display.card>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Ukuran</h2>
            <div class="flex flex-wrap gap-4">
                @foreach (['xs', 'sm', 'md', 'lg'] as $size)
                    <x-data-display.card :size="$size" class="bg-base-100 shadow-sm w-48" border>
                        <x-slot:title>Card {{ strtoupper($size) }}</x-slot:title>
                        <p class="text-sm">Contoh ukuran {{ $size }}.</p>
                    </x-data-display.card>
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Style: Border & Dash</h2>
            <div class="flex flex-wrap gap-4">
                <x-data-display.card class="bg-base-100 w-64" border>
                    <x-slot:title>Border</x-slot:title>
                    <p class="text-sm">Menggunakan <code>card-border</code>.</p>
                </x-data-display.card>

                <x-data-display.card class="bg-base-100 w-64" dash>
                    <x-slot:title>Dash</x-slot:title>
                    <p class="text-sm">Menggunakan <code>card-dash</code>.</p>
                </x-data-display.card>
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-data-display.card class="bg-base-100 w-96 shadow-sm" border&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;x-slot:figure&gt;&lt;img src="..." /&gt;&lt;/x-slot:figure&gt;</code></pre>
            <pre data-prefix="3"><code>    &lt;x-slot:title&gt;Judul Card&lt;/x-slot:title&gt;</code></pre>
            <pre data-prefix="4"><code>    Isi konten card.</code></pre>
            <pre data-prefix="5"><code>    &lt;x-slot:actions&gt;</code></pre>
            <pre data-prefix="6"><code>        &lt;x-actions.button variant="primary"&gt;Aksi&lt;/x-actions.button&gt;</code></pre>
            <pre data-prefix="7"><code>    &lt;/x-slot:actions&gt;</code></pre>
            <pre data-prefix="8"><code>&lt;/x-data-display.card&gt;</code></pre>
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
                        <td><code>size</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>xs, sm, md, lg, xl</td>
                    </tr>
                    <tr>
                        <td><code>side</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>Gambar tampil di samping, bukan di atas</td>
                    </tr>
                    <tr>
                        <td><code>imageFull</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>Gambar jadi background penuh card</td>
                    </tr>
                    <tr>
                        <td><code>border</code> / <code>dash</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>Style garis tepi</td>
                    </tr>
                    <tr>
                        <td><code>figure</code> <span class="text-base-content/50">(slot)</span></td>
                        <td>slot</td>
                        <td>—</td>
                        <td>Opsional — gambar/media di bagian atas/samping</td>
                    </tr>
                    <tr>
                        <td><code>title</code> <span class="text-base-content/50">(slot)</span></td>
                        <td>slot</td>
                        <td>—</td>
                        <td>Opsional — judul card</td>
                    </tr>
                    <tr>
                        <td><code>$slot</code> <span class="text-base-content/50">(default)</span></td>
                        <td>slot</td>
                        <td>—</td>
                        <td>Isi konten utama</td>
                    </tr>
                    <tr>
                        <td><code>actions</code> <span class="text-base-content/50">(slot)</span></td>
                        <td>slot</td>
                        <td>—</td>
                        <td>Opsional — area tombol aksi</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
