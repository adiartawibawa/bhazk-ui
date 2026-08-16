<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Input</span>
        <h1 class="text-3xl font-bold">Filter</h1>
        <p class="text-base-content/70 mt-2">
            Sekelompok tombol radio untuk memfilter data — memilih satu opsi
            otomatis menyembunyikan opsi lain dan menampilkan tombol reset.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100">
            <x-input.filter name="framework">
                <x-input.filter-item name="framework" label="Svelte" />
                <x-input.filter-item name="framework" label="Vue" />
                <x-input.filter-item name="framework" label="React" />
            </x-input.filter>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Pilih salah satu — opsi lain otomatis hilang dan tombol "×" muncul
            untuk reset kembali ke tampilan semula.
        </p>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-input.filter name="kategori"&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;x-input.filter-item name="kategori" label="Semua" /&gt;</code></pre>
            <pre data-prefix="3"><code>    &lt;x-input.filter-item name="kategori" label="Elektronik" /&gt;</code></pre>
            <pre data-prefix="4"><code>&lt;/x-input.filter&gt;</code></pre>
        </div>

        <div role="alert" class="alert alert-warning mt-4 text-sm">
            <span>
                <code>name</code> pada <code>&lt;x-input.filter&gt;</code> dan seluruh
                <code>&lt;x-input.filter-item&gt;</code> di dalamnya harus <strong>identik</strong>.
                Setiap grup filter berbeda di halaman yang sama wajib punya <code>name</code> unik.
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
                        <td rowspan="2"><code>&lt;x-input.filter&gt;</code></td>
                        <td><code>name</code></td>
                        <td>Grup radio</td>
                    </tr>
                    <tr>
                        <td><code>asForm</code></td>
                        <td>true = &lt;form&gt; (reset native), false = &lt;div&gt;</td>
                    </tr>
                    <tr>
                        <td rowspan="2"><code>&lt;x-input.filter-item&gt;</code></td>
                        <td><code>name</code></td>
                        <td>Wajib sama dengan filter induk</td>
                    </tr>
                    <tr>
                        <td><code>label</code></td>
                        <td>Teks tombol</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
