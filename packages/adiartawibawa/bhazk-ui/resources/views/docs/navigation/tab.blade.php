<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Navigation</span>
        <h1 class="text-3xl font-bold">Tab</h1>
        <p class="text-base-content/70 mt-2">
            Menampilkan daftar tautan dalam format tab. Ada 2 pola: tab navigasi
            sederhana (<code>&lt;x-navigation.tab&gt;</code>), atau tab dengan
            panel konten yang bisa berganti murni via CSS
            (<code>&lt;x-navigation.tab-panel&gt;</code>).
        </p>
    </div>

    {{-- Live Preview --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Tab dengan Konten</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100">
            <x-navigation.tabs style="lift">
                <x-navigation.tab-panel name="demo_tabs" label="Profil" active>
                    <div class="flex items-center gap-4">
                        <x-data-display.avatar src="https://img.daisyui.com/images/profile/demo/[email protected]"
                            size="w-14" />
                        <div>
                            <div class="font-bold">Adi Arta Wibawa</div>
                            <x-data-display.badge variant="success" size="sm">Online</x-data-display.badge>
                        </div>
                    </div>
                </x-navigation.tab-panel>

                <x-navigation.tab-panel name="demo_tabs" label="Statistik">
                    <x-data-display.stats>
                        <x-data-display.stat>
                            <x-slot:title>Proyek</x-slot:title>
                            <x-slot:value>12</x-slot:value>
                        </x-data-display.stat>
                    </x-data-display.stats>
                </x-navigation.tab-panel>

                <x-navigation.tab-panel name="demo_tabs" label="Nonaktif" disabled>
                    Tab ini tidak bisa dipilih.
                </x-navigation.tab-panel>
            </x-navigation.tabs>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Menggabungkan <code>&lt;x-data-display.avatar&gt;</code>,
            <code>&lt;x-data-display.badge&gt;</code>, dan
            <code>&lt;x-data-display.stats&gt;</code> sebagai isi masing-masing panel.
            Murni CSS — tidak ada Alpine/JS sama sekali.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Style: Border, Box, Lift</h2>
            <div class="space-y-4">
                <x-navigation.tabs style="border">
                    <x-navigation.tab active>Tab 1</x-navigation.tab>
                    <x-navigation.tab>Tab 2</x-navigation.tab>
                    <x-navigation.tab>Tab 3</x-navigation.tab>
                </x-navigation.tabs>

                <x-navigation.tabs style="box">
                    <x-navigation.tab>Tab 1</x-navigation.tab>
                    <x-navigation.tab active>Tab 2</x-navigation.tab>
                    <x-navigation.tab>Tab 3</x-navigation.tab>
                </x-navigation.tabs>

                <x-navigation.tabs style="lift">
                    <x-navigation.tab>Tab 1</x-navigation.tab>
                    <x-navigation.tab>Tab 2</x-navigation.tab>
                    <x-navigation.tab active>Tab 3</x-navigation.tab>
                </x-navigation.tabs>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Tab Navigasi Sederhana (Tanpa Konten)</h2>
            <x-navigation.tabs style="border">
                <x-navigation.tab href="#" active>Semua</x-navigation.tab>
                <x-navigation.tab href="#">Aktif</x-navigation.tab>
                <x-navigation.tab href="#">Selesai</x-navigation.tab>
                <x-navigation.tab href="#" disabled>Diarsipkan</x-navigation.tab>
            </x-navigation.tabs>
            <p class="text-sm text-base-content/60 mt-2">
                Dirender sebagai <code>&lt;a&gt;</code> — cocok saat setiap tab
                sebenarnya berpindah halaman/route, bukan cuma toggle panel.
            </p>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Ukuran</h2>
            <div class="space-y-3">
                @foreach (['xs', 'sm', 'md', 'lg', 'xl'] as $size)
                    <x-navigation.tabs style="border" :size="$size">
                        <x-navigation.tab active>{{ strtoupper($size) }}</x-navigation.tab>
                        <x-navigation.tab>Tab 2</x-navigation.tab>
                    </x-navigation.tabs>
                @endforeach
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>

        <p class="font-semibold mb-2">Tab Navigasi Sederhana</p>
        <div class="mockup-code mb-6">
            <pre data-prefix="1"><code>&lt;x-navigation.tabs style="border"&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;x-navigation.tab href="/semua" active&gt;Semua&lt;/x-navigation.tab&gt;</code></pre>
            <pre data-prefix="3"><code>    &lt;x-navigation.tab href="/aktif"&gt;Aktif&lt;/x-navigation.tab&gt;</code></pre>
            <pre data-prefix="4"><code>&lt;/x-navigation.tabs&gt;</code></pre>
        </div>

        <p class="font-semibold mb-2">Tab dengan Konten</p>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-navigation.tabs style="lift"&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;x-navigation.tab-panel name="grup_1" label="Tab 1" active&gt;</code></pre>
            <pre data-prefix="3"><code>        Isi tab 1.</code></pre>
            <pre data-prefix="4"><code>    &lt;/x-navigation.tab-panel&gt;</code></pre>
            <pre data-prefix="5"><code>    &lt;x-navigation.tab-panel name="grup_1" label="Tab 2"&gt;</code></pre>
            <pre data-prefix="6"><code>        Isi tab 2.</code></pre>
            <pre data-prefix="7"><code>    &lt;/x-navigation.tab-panel&gt;</code></pre>
            <pre data-prefix="8"><code>&lt;/x-navigation.tabs&gt;</code></pre>
        </div>

        <div role="alert" class="alert alert-warning mt-4 text-sm">
            <span>
                <code>name</code> pada seluruh <code>&lt;x-navigation.tab-panel&gt;</code>
                dalam satu grup harus <strong>identik</strong> — ini yang menghubungkan
                radio button jadi satu grup exclusive (hanya satu aktif sekaligus),
                sama seperti prinsip <code>name</code> pada komponen Accordion.
            </span>
        </div>

        <div class="overflow-x-auto mt-6">
            <table class="table">
                <thead>
                    <tr>
                        <th>Komponen</th>
                        <th>Prop</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="3"><code>&lt;x-navigation.tabs&gt;</code></td>
                        <td><code>style</code></td>
                        <td>box, border, lift</td>
                    </tr>
                    <tr>
                        <td><code>placement</code></td>
                        <td>top (default), bottom</td>
                    </tr>
                    <tr>
                        <td><code>size</code></td>
                        <td>xs, sm, md (default), lg, xl</td>
                    </tr>
                    <tr>
                        <td rowspan="3"><code>&lt;x-navigation.tab&gt;</code></td>
                        <td><code>href</code></td>
                        <td>Diisi = &lt;a&gt;; kosong = &lt;button&gt;</td>
                    </tr>
                    <tr>
                        <td><code>active</code></td>
                        <td>Tandai tab terpilih</td>
                    </tr>
                    <tr>
                        <td><code>disabled</code></td>
                        <td>Nonaktifkan tab</td>
                    </tr>
                    <tr>
                        <td rowspan="5"><code>&lt;x-navigation.tab-panel&gt;</code></td>
                        <td><code>name</code></td>
                        <td>Wajib — grup radio (harus sama antar tab dalam 1 grup)</td>
                    </tr>
                    <tr>
                        <td><code>label</code></td>
                        <td>Wajib — teks tab</td>
                    </tr>
                    <tr>
                        <td><code>active</code></td>
                        <td>Panel yang tampil saat render pertama</td>
                    </tr>
                    <tr>
                        <td><code>disabled</code></td>
                        <td>Nonaktifkan tab ini</td>
                    </tr>
                    <tr>
                        <td><code>$slot</code></td>
                        <td>Isi panel konten</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
