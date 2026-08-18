<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Utilities</span>
        <h1 class="text-3xl font-bold">Icon</h1>
        <p class="text-base-content/70 mt-2">
            Memuat file SVG dari folder mana pun secara dinamis dan meng-inline-nya
            langsung ke HTML — sehingga warna (<code>text-*</code>) dan ukuran
            (<code>w-*</code> <code>h-*</code>) bisa dikontrol lewat Tailwind, tidak
            seperti <code>&lt;img src="icon.svg"&gt;</code> biasa.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — dengan Button & Input</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 flex flex-wrap items-center gap-4">
            <x-actions.button variant="ghost" circle>
                <x-icon set="bhazk-ui-demo" name="bell" class="w-5 h-5" />
            </x-actions.button>

            <x-input.input-field placeholder="Cari...">
                <x-slot:icon>
                    <x-icon set="bhazk-ui-demo" name="search" class="w-4 h-4 opacity-50" />
                </x-slot:icon>
            </x-input.input-field>

            <x-actions.button variant="primary">
                <x-icon set="bhazk-ui-demo" name="settings" class="w-4 h-4" />
                Pengaturan
            </x-actions.button>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Icon dipakai sebagai slot <code>icon</code> milik
            <code>&lt;x-input.input-field&gt;</code> dan langsung sebagai konten
            <code>&lt;x-actions.button&gt;</code> — warnanya otomatis mewarisi
            warna teks tombol karena SVG memakai <code>stroke="currentColor"</code>.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Ukuran & Warna via Class</h2>
            <div class="flex flex-wrap items-center gap-6">
                <x-icon set="bhazk-ui-demo" name="home" class="w-4 h-4" />
                <x-icon set="bhazk-ui-demo" name="home" class="w-6 h-6 text-primary" />
                <x-icon set="bhazk-ui-demo" name="home" class="w-10 h-10 text-secondary" />
                <x-icon set="bhazk-ui-demo" name="home" class="w-14 h-14 text-error" />
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Dalam Menu</h2>
            <x-navigation.menu class="bg-base-200 rounded-box w-56">
                <x-navigation.menu-item href="#" active>
                    <x-icon set="bhazk-ui-demo" name="home" class="w-4 h-4" />
                    Beranda
                </x-navigation.menu-item>
                <x-navigation.menu-item href="#">
                    <x-icon set="bhazk-ui-demo" name="user" class="w-4 h-4" />
                    Profil
                </x-navigation.menu-item>
                <x-navigation.menu-item href="#">
                    <x-icon set="bhazk-ui-demo" name="settings" class="w-4 h-4" />
                    Pengaturan
                </x-navigation.menu-item>
            </x-navigation.menu>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Icon Tidak Ditemukan (Mode Local)</h2>
            <x-icon name="nama-icon-yang-tidak-ada" />
            <p class="text-sm text-base-content/60 mt-2">
                Di environment <code>local</code>, icon yang tidak ditemukan tetap
                menampilkan label peringatan kecil supaya mudah di-debug — di
                production, elemen ini tidak dirender sama sekali (tidak "bocor"
                info debug ke pengguna akhir).
            </p>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Setup Icon Set Sungguhan (Lucide)</h2>

        <p class="font-semibold mb-2">Opsi A — via npm (direkomendasikan)</p>
        <x-mockups.code class="w-full mb-4">
            <x-mockups.code-line prefix="$">npm install lucide-static</x-mockups.code-line>
        </x-mockups.code>

        <div class="mockup-code mb-6">
            <pre data-prefix="1"><code>// config/bhazk-ui.php</code></pre>
            <pre data-prefix="2"><code>'icons' => [</code></pre>
            <pre data-prefix="3"><code>    'default' => 'lucide',</code></pre>
            <pre data-prefix="4"><code>    'sets' => [</code></pre>
            <pre data-prefix="5"><code>        'lucide' => base_path('node_modules/lucide-static/icons'),</code></pre>
            <pre data-prefix="6"><code>    ],</code></pre>
            <pre data-prefix="7"><code>],</code></pre>
        </div>

        <p class="font-semibold mb-2">Cara Pakai</p>
        <x-mockups.code class="w-full">
            <x-mockups.code-line prefix="1">&lt;x-icon name="home" class="w-5 h-5 text-primary"
                /&gt;</x-mockups.code-line>
            <x-mockups.code-line prefix="2">&lt;x-icon name="lucide:shopping-cart" class="w-5 h-5"
                /&gt;</x-mockups.code-line>
            <x-mockups.code-line prefix="3">&lt;x-icon set="heroicons" name="bell" class="w-5 h-5"
                /&gt;</x-mockups.code-line>
        </x-mockups.code>

        <div role="alert" class="alert alert-info mt-4 text-sm">
            <span>
                Bisa punya lebih dari satu set icon sekaligus (mis. Lucide +
                Heroicons + icon custom perusahaan) — cukup tambahkan entri baru
                di <code>bhazk-ui.icons.sets</code>, lalu panggil lewat prop
                <code>set</code> atau prefix <code>"set:nama"</code> di <code>name</code>.
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
                        <td>Nama file tanpa ekstensi, atau format "set:nama"</td>
                    </tr>
                    <tr>
                        <td><code>set</code></td>
                        <td>string|null</td>
                        <td>config default</td>
                        <td>Override set tanpa perlu prefix di name</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
