<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Layout</span>
        <h1 class="text-3xl font-bold">Drawer Sidebar</h1>
        <p class="text-base-content/70 mt-2">
            Panel sidebar yang bisa disembunyikan/ditampilkan — murni CSS lewat
            <code>&lt;input type="checkbox"&gt;</code> tersembunyi, tanpa JS/Alpine.
        </p>
    </div>

    {{-- Live Preview --}}
    <div role="alert" class="alert alert-warning mb-6 text-sm">
        <span>
            Setiap kotak demo di bawah diberi class <code>transform</code> —
            trik CSS standar supaya <code>drawer-side</code>/<code>drawer-overlay</code>
            (yang sifatnya <code>position: fixed</code> menutupi seluruh viewport)
            terkurung di dalam kotak demo, tidak menabrak sidebar navigasi asli
            halaman dokumentasi ini. Di aplikasi produksi sungguhan, class ini
            <strong>tidak diperlukan</strong> — biarkan drawer benar-benar
            menutupi layar penuh seperti seharusnya.
        </span>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Navbar + Menu</h2>
        <div class="border border-base-300 rounded-box overflow-hidden transform">
            <x-layout.drawer id="demo-drawer" class="h-72">
                <x-layout.drawer-content class="flex flex-col">
                    <x-navigation.navbar class="bg-base-300 w-full">
                        <x-slot:start>
                            <x-layout.drawer-toggle-button target="demo-drawer" class="btn-square btn-ghost">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </x-layout.drawer-toggle-button>
                        </x-slot:start>
                        <x-slot:center>Bhazk UI</x-slot:center>
                    </x-navigation.navbar>
                    <div class="flex-1 grid place-items-center">Konten Halaman</div>
                </x-layout.drawer-content>

                <x-layout.drawer-side>
                    <x-navigation.menu target="demo-drawer" class="bg-base-200 min-h-full w-64 p-4">
                        <x-navigation.menu-item href="#" active>Beranda</x-navigation.menu-item>
                        <x-navigation.menu-item href="#">Produk</x-navigation.menu-item>
                        <x-navigation.menu-item href="#">Pengaturan</x-navigation.menu-item>
                    </x-navigation.menu>
                </x-layout.drawer-side>
            </x-layout.drawer>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Menggabungkan <code>&lt;x-navigation.navbar&gt;</code> dan
            <code>&lt;x-navigation.menu&gt;</code> yang sudah dibuat sebelumnya —
            klik ikon hamburger untuk membuka sidebar.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Dasar</h2>
            <div class="border border-base-300 rounded-box overflow-hidden transform">
                <x-layout.drawer id="basic-drawer" class="h-56">
                    <x-layout.drawer-content class="flex items-center justify-center">
                        <x-layout.drawer-toggle-button target="basic-drawer" class="btn-primary">
                            Buka Drawer
                        </x-layout.drawer-toggle-button>
                    </x-layout.drawer-content>
                    <x-layout.drawer-side>
                        <ul class="menu bg-base-200 min-h-full w-72 p-4">
                            <li><a>Sidebar Item 1</a></li>
                            <li><a>Sidebar Item 2</a></li>
                        </ul>
                    </x-layout.drawer-side>
                </x-layout.drawer>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Selalu Terbuka di Layar Besar</h2>
            <p class="text-sm text-base-content/60 mb-3">
                Prop <code>openOnLarge="lg"</code> — perkecil lebar browser untuk
                melihat sidebar berubah jadi toggle tersembunyi.
            </p>
            <div class="border border-base-300 rounded-box overflow-hidden transform">
                <x-layout.drawer id="responsive-drawer" open-on-large="lg" class="h-56">
                    <x-layout.drawer-content class="flex items-center justify-center">
                        <x-layout.drawer-toggle-button target="responsive-drawer" class="btn-primary lg:hidden">
                            Buka Drawer
                        </x-layout.drawer-toggle-button>
                    </x-layout.drawer-content>
                    <x-layout.drawer-side>
                        <ul class="menu bg-base-200 min-h-full w-72 p-4">
                            <li><a>Sidebar Item 1</a></li>
                            <li><a>Sidebar Item 2</a></li>
                        </ul>
                    </x-layout.drawer-side>
                </x-layout.drawer>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Dari Sisi Kanan</h2>
            <div class="border border-base-300 rounded-box overflow-hidden transform">
                <x-layout.drawer id="end-drawer" end class="h-56">
                    <x-layout.drawer-content class="flex items-center justify-center">
                        <x-layout.drawer-toggle-button target="end-drawer" class="btn-primary">
                            Buka dari Kanan
                        </x-layout.drawer-toggle-button>
                    </x-layout.drawer-content>
                    <x-layout.drawer-side>
                        <ul class="menu bg-base-200 min-h-full w-72 p-4">
                            <li><a>Sidebar Item 1</a></li>
                            <li><a>Sidebar Item 2</a></li>
                        </ul>
                    </x-layout.drawer-side>
                </x-layout.drawer>
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-layout.drawer id="my-drawer"&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;x-layout.drawer-content&gt;</code></pre>
            <pre data-prefix="3"><code>        &lt;x-layout.drawer-toggle-button target="my-drawer"&gt;Buka&lt;/x-layout.drawer-toggle-button&gt;</code></pre>
            <pre data-prefix="4"><code>    &lt;/x-layout.drawer-content&gt;</code></pre>
            <pre data-prefix="5"><code></code></pre>
            <pre data-prefix="6"><code>    &lt;x-layout.drawer-side&gt;</code></pre>
            <pre data-prefix="7"><code>        &lt;x-navigation.menu class="bg-base-200 min-h-full w-64"&gt;</code></pre>
            <pre data-prefix="8"><code>            &lt;x-navigation.menu-item href="/"&gt;Beranda&lt;/x-navigation.menu-item&gt;</code></pre>
            <pre data-prefix="9"><code>        &lt;/x-navigation.menu&gt;</code></pre>
            <pre data-prefix="10"><code>    &lt;/x-layout.drawer-side&gt;</code></pre>
            <pre data-prefix="11"><code>&lt;/x-layout.drawer&gt;</code></pre>
        </div>

        <div role="alert" class="alert alert-info mt-4 text-sm">
            <span>
                Untuk pola lanjutan seperti sidebar collapsible icon-only
                (varian <code>is-drawer-open:</code>/<code>is-drawer-close:</code>),
                cukup tambahkan class Tailwind arbitrary tersebut langsung lewat
                atribut <code>class</code> di <code>&lt;x-layout.drawer-side&gt;</code> —
                sudah otomatis diteruskan tanpa perlu prop khusus.
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
                        <td rowspan="4"><code>&lt;x-layout.drawer&gt;</code></td>
                        <td><code>id</code></td>
                        <td>Wajib, unik</td>
                    </tr>
                    <tr>
                        <td><code>end</code></td>
                        <td>Buka dari sisi kanan</td>
                    </tr>
                    <tr>
                        <td><code>openOnLarge</code></td>
                        <td>sm, md, lg, xl — otomatis terbuka mulai breakpoint ini</td>
                    </tr>
                    <tr>
                        <td><code>forceOpen</code></td>
                        <td>Paksa selalu terbuka</td>
                    </tr>
                    <tr>
                        <td><code>&lt;x-layout.drawer-content&gt;</code></td>
                        <td>—</td>
                        <td>Wadah konten halaman utama</td>
                    </tr>
                    <tr>
                        <td rowspan="2"><code>&lt;x-layout.drawer-side&gt;</code> / <code>drawer-toggle-button</code>
                        </td>
                        <td><code>target</code></td>
                        <td>Wajib — sama dengan id drawer induk</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
