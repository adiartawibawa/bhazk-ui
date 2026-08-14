<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Navigation</span>
        <h1 class="text-3xl font-bold">Navbar</h1>
        <p class="text-base-content/70 mt-2">
            Bilah navigasi di bagian atas halaman, terdiri dari 3 section:
            start, center, end.
        </p>
    </div>

    {{-- Live Preview --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Navbar Lengkap</h2>
        <div class="border border-base-300 rounded-box bg-base-100 overflow-hidden">
            <x-navigation.navbar class="bg-base-200 shadow-sm">
                <x-slot:start>
                    <x-actions.dropdown>
                        <x-slot:trigger>
                            <x-actions.button variant="ghost" circle class="lg:hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h7" />
                                </svg>
                            </x-actions.button>
                        </x-slot:trigger>
                        <li><a>Beranda</a></li>
                        <li><a>Produk</a></li>
                        <li><a>Tentang</a></li>
                    </x-actions.dropdown>

                    <x-actions.button variant="ghost" class="text-xl">Bhazk UI</x-actions.button>
                </x-slot:start>

                <x-slot:center class="hidden lg:flex">
                    <x-navigation.menu direction="horizontal" class="px-1">
                        <x-navigation.menu-item href="#" active>Beranda</x-navigation.menu-item>
                        <x-navigation.menu-item href="#">Produk</x-navigation.menu-item>
                        <x-navigation.menu-item href="#">Tentang</x-navigation.menu-item>
                    </x-navigation.menu>
                </x-slot:center>

                <x-slot:end>
                    <x-actions.button variant="ghost" circle>
                        <span class="indicator">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <x-data-display.badge variant="error" size="sm"
                                class="indicator-item">3</x-data-display.badge>
                        </span>
                    </x-actions.button>
                    <x-actions.button variant="primary" size="sm">Masuk</x-actions.button>
                </x-slot:end>
            </x-navigation.navbar>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Menggabungkan <code>&lt;x-actions.dropdown&gt;</code> (menu mobile),
            <code>&lt;x-actions.button&gt;</code>, <code>&lt;x-navigation.menu&gt;</code>,
            dan <code>&lt;x-data-display.badge&gt;</code> sekaligus dalam satu navbar.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Sederhana — Judul & Aksi Saja</h2>
            <div class="border border-base-300 rounded-box overflow-hidden">
                <x-navigation.navbar class="bg-base-200">
                    <x-slot:start>
                        <x-actions.button variant="ghost" class="text-xl">Bhazk UI</x-actions.button>
                    </x-slot:start>
                    <x-slot:end>
                        <x-actions.button variant="ghost" circle>🔍</x-actions.button>
                    </x-slot:end>
                </x-navigation.navbar>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Hanya Center</h2>
            <div class="border border-base-300 rounded-box overflow-hidden">
                <x-navigation.navbar class="bg-base-200">
                    <x-slot:center>
                        <x-actions.button variant="ghost" class="text-xl">Judul di Tengah</x-actions.button>
                    </x-slot:center>
                </x-navigation.navbar>
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-navigation.navbar class="bg-base-200 shadow-sm"&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;x-slot:start&gt;</code></pre>
            <pre data-prefix="3"><code>        &lt;x-actions.button variant="ghost" class="text-xl"&gt;Logo&lt;/x-actions.button&gt;</code></pre>
            <pre data-prefix="4"><code>    &lt;/x-slot:start&gt;</code></pre>
            <pre data-prefix="5"><code>    &lt;x-slot:end&gt;</code></pre>
            <pre data-prefix="6"><code>        &lt;x-actions.button variant="primary" size="sm"&gt;Masuk&lt;/x-actions.button&gt;</code></pre>
            <pre data-prefix="7"><code>    &lt;/x-slot:end&gt;</code></pre>
            <pre data-prefix="8"><code>&lt;/x-navigation.navbar&gt;</code></pre>
        </div>

        <div role="alert" class="alert alert-info mt-4 text-sm">
            <span>
                Class <code>indicator</code>/<code>indicator-item</code> pada contoh
                badge notifikasi keranjang di atas masih ditulis manual — komponen
                khusus untuk pola ini akan dibuat di kategori <code>layout</code>.
            </span>
        </div>

        <div class="overflow-x-auto mt-6">
            <table class="table">
                <thead>
                    <tr>
                        <th>Slot</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>start</code></td>
                        <td>Opsional — konten di sisi kiri (logo, menu mobile)</td>
                    </tr>
                    <tr>
                        <td><code>center</code></td>
                        <td>Opsional — konten di tengah (biasanya menu horizontal desktop)</td>
                    </tr>
                    <tr>
                        <td><code>end</code></td>
                        <td>Opsional — konten di sisi kanan (aksi, akun, notifikasi)</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
