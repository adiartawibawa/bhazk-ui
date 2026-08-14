<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Navigation</span>
        <h1 class="text-3xl font-bold">Breadcrumbs</h1>
        <p class="text-base-content/70 mt-2">
            Menunjukkan posisi halaman saat ini dalam hierarki navigasi situs.
        </p>
    </div>

    {{-- Live Preview --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100">
            <x-navigation.breadcrumbs class="text-sm">
                <x-navigation.breadcrumb-item href="/">Beranda</x-navigation.breadcrumb-item>
                <x-navigation.breadcrumb-item href="/dokumen">Dokumen</x-navigation.breadcrumb-item>
                <x-navigation.breadcrumb-item>Tambah Dokumen</x-navigation.breadcrumb-item>
            </x-navigation.breadcrumbs>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Item terakhir ("Tambah Dokumen") sengaja tanpa <code>href</code> —
            otomatis jadi teks biasa, bukan link, karena mewakili halaman aktif.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Dengan Icon</h2>
            <div class="border border-base-300 rounded-box p-8 bg-base-100">
                <x-navigation.breadcrumbs class="text-sm">
                    <x-navigation.breadcrumb-item href="/">
                        <x-slot:icon>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="h-4 w-4 stroke-current">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                            </svg>
                        </x-slot:icon>
                        Beranda
                    </x-navigation.breadcrumb-item>
                    <x-navigation.breadcrumb-item href="/dokumen">
                        <x-slot:icon>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="h-4 w-4 stroke-current">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </x-slot:icon>
                        Dokumen
                    </x-navigation.breadcrumb-item>
                </x-navigation.breadcrumbs>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Truncated (Lebar Terbatas + Scroll)</h2>
            <div class="border border-base-300 rounded-box p-8 bg-base-100">
                <x-navigation.breadcrumbs class="text-sm max-w-xs">
                    <x-navigation.breadcrumb-item href="#">Folder dengan nama sangat panjang
                        sekali</x-navigation.breadcrumb-item>
                    <x-navigation.breadcrumb-item href="#">Sub Folder</x-navigation.breadcrumb-item>
                    <x-navigation.breadcrumb-item href="#">Sub Sub Folder</x-navigation.breadcrumb-item>
                    <x-navigation.breadcrumb-item>File Akhir</x-navigation.breadcrumb-item>
                </x-navigation.breadcrumbs>
            </div>
            <p class="text-sm text-base-content/60 mt-2">
                Class <code>max-w-xs</code> (Tailwind biasa) membuat breadcrumbs
                otomatis scroll horizontal saat kontennya melebihi lebar tersebut.
            </p>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Path Panjang — Diringkas dengan Dropdown</h2>
            <div class="border border-base-300 rounded-box p-8 bg-base-100">
                <x-navigation.breadcrumbs class="text-sm">
                    <x-navigation.breadcrumb-item href="/">Beranda</x-navigation.breadcrumb-item>
                    <li>
                        <x-actions.dropdown>
                            <x-slot:trigger>
                                <span class="cursor-pointer">•••</span>
                            </x-slot:trigger>
                    <li><a href="#">Kategori</a></li>
                    <li><a href="#">Sub Kategori</a></li>
                    <li><a href="#">Produk</a></li>
                    </x-actions.dropdown>
                    </li>
                    <x-navigation.breadcrumb-item>Detail Produk</x-navigation.breadcrumb-item>
                </x-navigation.breadcrumbs>
            </div>
            <p class="text-sm text-base-content/60 mt-3">
                Pola umum untuk path yang sangat dalam — item tengah diringkas jadi
                <code>&lt;x-actions.dropdown&gt;</code>, ditaruh langsung sebagai <code>&lt;li&gt;</code>
                di antara item breadcrumb biasa.
            </p>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-navigation.breadcrumbs class="text-sm"&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;x-navigation.breadcrumb-item href="/"&gt;Beranda&lt;/x-navigation.breadcrumb-item&gt;</code></pre>
            <pre data-prefix="3"><code>    &lt;x-navigation.breadcrumb-item href="/dokumen"&gt;Dokumen&lt;/x-navigation.breadcrumb-item&gt;</code></pre>
            <pre data-prefix="4"><code>    &lt;x-navigation.breadcrumb-item&gt;Halaman Ini&lt;/x-navigation.breadcrumb-item&gt;</code></pre>
            <pre data-prefix="5"><code>&lt;/x-navigation.breadcrumbs&gt;</code></pre>
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
                        <td><code>&lt;x-navigation.breadcrumbs&gt;</code></td>
                        <td>—</td>
                        <td>Wrapper, tanpa prop khusus. Ukuran/lebar lewat class Tailwind (<code>text-sm</code>,
                            <code>max-w-xs</code>)</td>
                    </tr>
                    <tr>
                        <td rowspan="2"><code>&lt;x-navigation.breadcrumb-item&gt;</code></td>
                        <td><code>href</code></td>
                        <td>Diisi = link; kosong = teks halaman aktif</td>
                    </tr>
                    <tr>
                        <td><code>icon</code></td>
                        <td>Opsional — SVG/emoji di depan teks (bisa lewat prop atau <code>&lt;x-slot:icon&gt;</code>)
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
