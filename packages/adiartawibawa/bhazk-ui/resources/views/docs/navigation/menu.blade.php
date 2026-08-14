<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Navigation</span>
        <h1 class="text-3xl font-bold">Menu</h1>
        <p class="text-base-content/70 mt-2">
            Daftar navigasi vertikal atau horizontal, mendukung submenu
            collapsible dan pengelompokan dengan judul section.
        </p>
    </div>

    {{-- Live Preview --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Sidebar dalam Card</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100">
            <x-data-display.card class="bg-base-200 w-64" border>
                <x-navigation.menu>
                    <x-navigation.menu-title>Dashboard</x-navigation.menu-title>
                    <x-navigation.menu-item href="#" active>
                        <x-slot:icon>🏠</x-slot:icon>
                        Beranda
                    </x-navigation.menu-item>
                    <x-navigation.menu-item href="#">
                        <x-slot:icon>📊</x-slot:icon>
                        Statistik
                    </x-navigation.menu-item>

                    <x-navigation.menu-title>Pengaturan</x-navigation.menu-title>
                    <x-navigation.menu-submenu>
                        <x-slot:summary>
                            <span class="inline-flex items-center gap-2">⚙️ Akun</span>
                        </x-slot:summary>
                        <x-navigation.menu-item href="#">Profil</x-navigation.menu-item>
                        <x-navigation.menu-item href="#">Keamanan</x-navigation.menu-item>
                    </x-navigation.menu-submenu>
                    <x-navigation.menu-item href="#" disabled>
                        <x-slot:icon>🔒</x-slot:icon>
                        Fitur Premium
                    </x-navigation.menu-item>
                </x-navigation.menu>
            </x-data-display.card>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Menu ditaruh langsung sebagai isi <code>&lt;x-data-display.card&gt;</code> —
            gabungan dua komponen dari kategori berbeda tanpa konflik style.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Horizontal</h2>
            <div class="border border-base-300 rounded-box p-4 bg-base-100">
                <x-navigation.menu direction="horizontal" class="bg-base-200 rounded-box">
                    <x-navigation.menu-item href="#" active>Beranda</x-navigation.menu-item>
                    <x-navigation.menu-item href="#">Produk</x-navigation.menu-item>
                    <x-navigation.menu-item href="#">Tentang</x-navigation.menu-item>
                    <x-navigation.menu-item href="#">Kontak</x-navigation.menu-item>
                </x-navigation.menu>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Ukuran</h2>
            <div class="flex flex-wrap gap-4">
                @foreach (['xs', 'sm', 'md', 'lg'] as $size)
                    <x-navigation.menu :size="$size" class="bg-base-200 rounded-box w-40">
                        <x-navigation.menu-item href="#" active>{{ strtoupper($size) }}</x-navigation.menu-item>
                        <x-navigation.menu-item href="#">Item Lain</x-navigation.menu-item>
                    </x-navigation.menu>
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Submenu Bertingkat</h2>
            <div class="border border-base-300 rounded-box p-4 bg-base-100">
                <x-navigation.menu class="bg-base-200 rounded-box w-64">
                    <x-navigation.menu-item href="#">Item 1</x-navigation.menu-item>
                    <x-navigation.menu-submenu open>
                        <x-slot:summary>Parent</x-slot:summary>
                        <x-navigation.menu-item href="#">Submenu 1</x-navigation.menu-item>
                        <x-navigation.menu-submenu>
                            <x-slot:summary>Parent Bertingkat</x-slot:summary>
                            <x-navigation.menu-item href="#">Submenu Level 3</x-navigation.menu-item>
                        </x-navigation.menu-submenu>
                    </x-navigation.menu-submenu>
                    <x-navigation.menu-item href="#">Item 3</x-navigation.menu-item>
                </x-navigation.menu>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Item dengan Badge (Notifikasi)</h2>
            <div class="border border-base-300 rounded-box p-4 bg-base-100">
                <x-navigation.menu class="bg-base-200 rounded-box w-64">
                    <x-navigation.menu-item href="#" class="justify-between">
                        Pesan
                        <x-data-display.badge variant="error" size="sm">5</x-data-display.badge>
                    </x-navigation.menu-item>
                    <x-navigation.menu-item href="#" class="justify-between">
                        Notifikasi
                        <x-data-display.badge variant="primary" size="sm">12</x-data-display.badge>
                    </x-navigation.menu-item>
                </x-navigation.menu>
            </div>
            <p class="text-sm text-base-content/60 mt-2">
                Class <code>justify-between</code> dikirim langsung sebagai atribut
                komponen — otomatis diteruskan ke tag <code>&lt;a&gt;</code> lewat
                <code>$attributes</code>, tanpa perlu <code>&lt;span&gt;</code> pembungkus tambahan.
            </p>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-navigation.menu class="bg-base-200 rounded-box w-56"&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;x-navigation.menu-title&gt;Menu&lt;/x-navigation.menu-title&gt;</code></pre>
            <pre data-prefix="3"><code>    &lt;x-navigation.menu-item href="/" active&gt;Beranda&lt;/x-navigation.menu-item&gt;</code></pre>
            <pre data-prefix="4"><code>    &lt;x-navigation.menu-submenu&gt;</code></pre>
            <pre data-prefix="5"><code>        &lt;x-slot:summary&gt;Pengaturan&lt;/x-slot:summary&gt;</code></pre>
            <pre data-prefix="6"><code>        &lt;x-navigation.menu-item href="/profil"&gt;Profil&lt;/x-navigation.menu-item&gt;</code></pre>
            <pre data-prefix="7"><code>    &lt;/x-navigation.menu-submenu&gt;</code></pre>
            <pre data-prefix="8"><code>&lt;/x-navigation.menu&gt;</code></pre>
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
                        <td rowspan="2"><code>&lt;x-navigation.menu&gt;</code></td>
                        <td><code>direction</code></td>
                        <td>horizontal, vertical (default)</td>
                    </tr>
                    <tr>
                        <td><code>size</code></td>
                        <td>xs, sm, md, lg, xl</td>
                    </tr>
                    <tr>
                        <td><code>&lt;x-navigation.menu-title&gt;</code></td>
                        <td>—</td>
                        <td>Label section, tanpa prop</td>
                    </tr>
                    <tr>
                        <td rowspan="4"><code>&lt;x-navigation.menu-item&gt;</code></td>
                        <td><code>href</code></td>
                        <td>URL tujuan</td>
                    </tr>
                    <tr>
                        <td><code>active</code></td>
                        <td>Tandai item sedang dipilih</td>
                    </tr>
                    <tr>
                        <td><code>disabled</code></td>
                        <td>Nonaktifkan item</td>
                    </tr>
                    <tr>
                        <td><code>icon</code></td>
                        <td>Opsional — ikon di depan teks</td>
                    </tr>
                    <tr>
                        <td rowspan="3"><code>&lt;x-navigation.menu-submenu&gt;</code></td>
                        <td><code>open</code></td>
                        <td>State awal terbuka</td>
                    </tr>
                    <tr>
                        <td><code>icon</code></td>
                        <td>Opsional — ikon di depan summary</td>
                    </tr>
                    <tr>
                        <td><code>summary</code> (slot)</td>
                        <td>Wajib — label parent submenu</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
