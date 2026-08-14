<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Navigation</span>
        <h1 class="text-3xl font-bold">Megamenu</h1>
        <p class="text-base-content/70 mt-2">
            Menu horizontal besar di mana setiap item membuka popover berisi
            blok navigasi lengkap. Dibangun di atas Popover API native —
            tanpa Alpine/JS. Di aplikasi produksi disarankan hanya satu
            megamenu sebagai navigasi utama situs; halaman ini menampilkan
            beberapa instance sekaligus khusus untuk keperluan demo, sama
            seperti dokumentasi resmi DaisyUI.
        </p>
    </div>

    {{-- 1. Responsive dengan menu vertikal kecil --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Responsive — Menu Vertikal di Layar Kecil</h2>
        <div class="border border-base-300 rounded-box p-2 bg-base-100">
            <x-actions.button class="sm:hidden" popovertarget="mm1">Menu</x-actions.button>
            <x-navigation.megamenu id="mm1">
                <x-navigation.megamenu-item id="mm1-a" label="Services">
                    <x-navigation.menu>
                        <x-navigation.menu-item href="#">Enterprise</x-navigation.menu-item>
                        <x-navigation.menu-item href="#">CRM software</x-navigation.menu-item>
                        <x-navigation.menu-item href="#">Security</x-navigation.menu-item>
                        <x-navigation.menu-item href="#">Consulting</x-navigation.menu-item>
                    </x-navigation.menu>
                </x-navigation.megamenu-item>

                <x-navigation.megamenu-item id="mm1-b" label="AI">
                    <x-navigation.menu>
                        <x-navigation.menu-item href="#">AI infrastructure</x-navigation.menu-item>
                        <x-navigation.menu-item href="#">Image generation</x-navigation.menu-item>
                        <x-navigation.menu-item href="#">MCP servers</x-navigation.menu-item>
                    </x-navigation.menu>
                </x-navigation.megamenu-item>

                <x-navigation.megamenu-item id="mm1-c" label="Cloud Solutions">
                    <x-navigation.menu>
                        <x-navigation.menu-item href="#">Cloud computing</x-navigation.menu-item>
                        <x-navigation.menu-item href="#">Storage solutions</x-navigation.menu-item>
                        <x-navigation.menu-item href="#">Database services</x-navigation.menu-item>
                        <x-navigation.menu-item href="#">CDN performance</x-navigation.menu-item>
                    </x-navigation.menu>
                </x-navigation.megamenu-item>
            </x-navigation.megamenu>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Perkecil lebar browser untuk melihat tombol "Menu" muncul dan
            megamenu jatuh ke tata letak vertikal.
        </p>
    </section>

    {{-- 2. Wide dengan menu horizontal --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Wide dengan Menu Horizontal</h2>
        <div class="border border-base-300 rounded-box p-2 bg-base-100">
            <x-actions.button class="sm:hidden" popovertarget="mm2">Menu</x-actions.button>
            <x-navigation.megamenu id="mm2" wide>
                <x-navigation.megamenu-item id="mm2-a" label="One">
                    <x-navigation.menu direction="horizontal">
                        <x-navigation.menu-item href="#">Enterprise</x-navigation.menu-item>
                        <x-navigation.menu-item href="#">CRM software</x-navigation.menu-item>
                        <x-navigation.menu-item href="#">Security</x-navigation.menu-item>
                        <x-navigation.menu-item href="#">Consulting</x-navigation.menu-item>
                    </x-navigation.menu>
                </x-navigation.megamenu-item>

                <x-navigation.megamenu-item id="mm2-b" label="Two">
                    <x-navigation.menu direction="horizontal">
                        <x-navigation.menu-item href="#">AI infrastructure</x-navigation.menu-item>
                        <x-navigation.menu-item href="#">Image generation</x-navigation.menu-item>
                        <x-navigation.menu-item href="#">MCP servers</x-navigation.menu-item>
                    </x-navigation.menu>
                </x-navigation.megamenu-item>

                <x-navigation.megamenu-item id="mm2-c" label="Three">
                    <x-navigation.menu direction="horizontal">
                        <x-navigation.menu-item href="#">Cloud computing</x-navigation.menu-item>
                        <x-navigation.menu-item href="#">Storage solutions</x-navigation.menu-item>
                        <x-navigation.menu-item href="#">Database services</x-navigation.menu-item>
                    </x-navigation.menu>
                </x-navigation.megamenu-item>
            </x-navigation.megamenu>
        </div>
    </section>

    {{-- 3. Banyak link + gambar + menu-title, dengan CSS Anchor Positioning --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Banyak Tautan + Gambar + Judul Section</h2>
        <div class="border border-base-300 rounded-box p-2 bg-base-100">
            <x-actions.button class="sm:hidden" popovertarget="mm3">Menu</x-actions.button>

            {{--
                [anchor-name:--mm3] & [position-anchor:--mm3] — CSS Anchor Positioning
                native, dipakai resmi oleh DaisyUI khusus untuk konten wide yang
                kompleks (kombinasi menu + gambar) supaya popover tetap presisi
                posisinya. Cukup ditambahkan via class biasa — tidak perlu prop
                khusus di komponen karena $attributes sudah meneruskannya otomatis.
            --}}
            <x-navigation.megamenu id="mm3" wide class="[anchor-name:--mm3]">
                <x-navigation.megamenu-item id="mm3-a" label="One" class="[position-anchor:--mm3]">
                    <div class="flex max-sm:flex-col items-start">
                        <x-navigation.menu class="w-full md:menu-horizontal">
                            <li>
                                <a>Enterprise</a>
                                <ul>
                                    <li><a>CRM software</a></li>
                                    <li><a>Marketing management</a></li>
                                    <li><a>Security</a></li>
                                    <li><a>Consulting</a></li>
                                </ul>
                            </li>
                            <li>
                                <a>Company</a>
                                <ul>
                                    <li><a>About us</a></li>
                                    <li><a>Contact us</a></li>
                                    <li><a>Privacy policy</a></li>
                                </ul>
                            </li>
                        </x-navigation.menu>
                        <img src="https://img.daisyui.com/images/stock/photo-1559181567-c3190ca9959b.webp"
                            class="md:max-w-sm max-md:w-auto" alt="Megamenu">
                    </div>
                </x-navigation.megamenu-item>

                <x-navigation.megamenu-item id="mm3-b" label="Two" class="[position-anchor:--mm3]">
                    <div class="flex max-sm:flex-col items-start">
                        <x-navigation.menu class="w-full">
                            <x-navigation.menu-title>Solutions</x-navigation.menu-title>
                            <x-navigation.menu-item href="#">Design</x-navigation.menu-item>
                            <x-navigation.menu-item href="#">Development</x-navigation.menu-item>
                            <x-navigation.menu-item href="#">Hosting</x-navigation.menu-item>

                            <x-navigation.menu-title>Products</x-navigation.menu-title>
                            <x-navigation.menu-item href="#">UI Kit</x-navigation.menu-item>
                            <x-navigation.menu-submenu>
                                <x-slot:summary>Open source</x-slot:summary>
                                <x-navigation.menu-item href="#">Auth management system</x-navigation.menu-item>
                                <x-navigation.menu-item href="#">Color picker app</x-navigation.menu-item>
                            </x-navigation.menu-submenu>
                        </x-navigation.menu>
                    </div>
                </x-navigation.megamenu-item>
            </x-navigation.megamenu>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Item "Two" menggabungkan <code>&lt;x-navigation.menu-title&gt;</code> dan
            <code>&lt;x-navigation.menu-submenu&gt;</code> yang sudah dibuat sebelumnya
            di dalam panel megamenu.
        </p>
    </section>

    {{-- 4. Di dalam Navbar --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Di dalam Navbar</h2>
        <div class="border border-base-300 rounded-box overflow-hidden">
            <x-navigation.navbar class="bg-base-100 shadow-sm">
                <x-slot:start>
                    <x-actions.button variant="ghost" class="text-xl">Bhazk UI</x-actions.button>
                </x-slot:start>

                <x-slot:center>
                    <x-navigation.megamenu id="mm4" full class="[anchor-name:--mm4]">
                        <x-navigation.megamenu-item id="mm4-a" label="Layanan" class="[position-anchor:--mm4]">
                            <x-navigation.menu>
                                <x-navigation.menu-item href="#">Enterprise</x-navigation.menu-item>
                                <x-navigation.menu-item href="#">Konsultasi</x-navigation.menu-item>
                                <x-navigation.menu-item href="#">Keamanan</x-navigation.menu-item>
                            </x-navigation.menu>
                        </x-navigation.megamenu-item>

                        <x-navigation.megamenu-item id="mm4-b" label="Produk" class="[position-anchor:--mm4]">
                            <x-navigation.menu>
                                <x-navigation.menu-item href="#">UI Kit</x-navigation.menu-item>
                                <x-navigation.menu-item href="#">Cloud Platform</x-navigation.menu-item>
                                <x-navigation.menu-item href="#">Open Source</x-navigation.menu-item>
                            </x-navigation.menu>
                        </x-navigation.megamenu-item>
                    </x-navigation.megamenu>
                </x-slot:center>

                <x-slot:end>
                    <x-actions.button variant="primary" size="sm">Masuk</x-actions.button>
                    <x-actions.button variant="ghost" class="sm:hidden" popovertarget="mm4">Menu</x-actions.button>
                </x-slot:end>
            </x-navigation.navbar>
        </div>
    </section>

    {{-- 5. Tanpa panah, dengan Card --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Tanpa Panah, dengan Card</h2>
        <div class="border border-base-300 rounded-box p-2 bg-base-100">
            <x-navigation.megamenu id="mm5">
                <x-navigation.megamenu-item id="mm5-a" label="Info" no-arrow>
                    <x-data-display.card class="w-64" size="sm">
                        <x-slot:title>Promo Spesial</x-slot:title>
                        <p class="text-sm">Diskon 20% untuk paket tahunan.</p>
                        <x-slot:actions>
                            <x-actions.button size="xs" variant="primary">Lihat</x-actions.button>
                        </x-slot:actions>
                    </x-data-display.card>
                </x-navigation.megamenu-item>

                <x-navigation.megamenu-item id="mm5-b" label="Kontak" no-arrow>
                    <div class="p-4 text-sm">[email protected]</div>
                </x-navigation.megamenu-item>
            </x-navigation.megamenu>
        </div>
    </section>

    {{-- 6. Ukuran --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Ukuran</h2>
        <div class="flex flex-col gap-4">
            @foreach (['xs', 'sm', 'md', 'lg', 'xl'] as $size)
                <div class="border border-base-300 rounded-box p-2 bg-base-100">
                    <x-navigation.megamenu :id="'mm6-' . $size" :size="$size">
                        <x-navigation.megamenu-item :id="'mm6-' . $size . '-a'" label="One">
                            <div class="p-4">Konten ukuran {{ strtoupper($size) }}</div>
                        </x-navigation.megamenu-item>
                        <x-navigation.megamenu-item :id="'mm6-' . $size . '-b'" label="Two">
                            <div class="p-4">Konten kedua</div>
                        </x-navigation.megamenu-item>
                    </x-navigation.megamenu>
                </div>
            @endforeach
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-actions.button class="sm:hidden" popovertarget="my-menu"&gt;Menu&lt;/x-actions.button&gt;</code></pre>
            <pre data-prefix="2"><code></code></pre>
            <pre data-prefix="3"><code>&lt;x-navigation.megamenu id="my-menu"&gt;</code></pre>
            <pre data-prefix="4"><code>    &lt;x-navigation.megamenu-item id="item-1" label="Layanan"&gt;</code></pre>
            <pre data-prefix="5"><code>        &lt;x-navigation.menu&gt;</code></pre>
            <pre data-prefix="6"><code>            &lt;x-navigation.menu-item href="#"&gt;Konsultasi&lt;/x-navigation.menu-item&gt;</code></pre>
            <pre data-prefix="7"><code>        &lt;/x-navigation.menu&gt;</code></pre>
            <pre data-prefix="8"><code>    &lt;/x-navigation.megamenu-item&gt;</code></pre>
            <pre data-prefix="9"><code>&lt;/x-navigation.megamenu&gt;</code></pre>
        </div>

        <div role="alert" class="alert alert-info mt-4 text-sm">
            <span>
                Untuk konten wide yang kompleks (kombinasi menu + gambar, seperti
                contoh "Banyak Tautan" di atas), tambahkan
                <code>class="[anchor-name:--nama]"</code> di <code>&lt;x-navigation.megamenu&gt;</code>
                dan <code>class="[position-anchor:--nama]"</code> di setiap
                <code>&lt;x-navigation.megamenu-item&gt;</code> — teknik CSS Anchor
                Positioning native yang otomatis diteruskan lewat <code>$attributes</code>,
                tanpa perlu prop khusus.
            </span>
        </div>

        <div role="alert" class="alert alert-warning mt-4 text-sm">
            <span>
                Setiap <code>id</code> di seluruh halaman harus <strong>unik</strong> —
                baik pada <code>&lt;x-navigation.megamenu&gt;</code> maupun
                <code>&lt;x-navigation.megamenu-item&gt;</code>. Maksimal 10
                <code>megamenu-item</code> per <code>megamenu</code>. Fitur ini
                butuh browser modern yang mendukung Popover API
                (Chrome/Edge 114+, Safari 17+, Firefox 125+).
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
                        <td rowspan="3"><code>&lt;x-navigation.megamenu&gt;</code></td>
                        <td><code>id</code></td>
                        <td>Wajib, unik</td>
                    </tr>
                    <tr>
                        <td><code>wide</code> / <code>full</code></td>
                        <td>Lebar popover mengikuti container / seluruh halaman</td>
                    </tr>
                    <tr>
                        <td><code>size</code></td>
                        <td>xs, sm, md (default), lg, xl</td>
                    </tr>
                    <tr>
                        <td rowspan="3"><code>&lt;x-navigation.megamenu-item&gt;</code></td>
                        <td><code>id</code></td>
                        <td>Wajib, unik per item</td>
                    </tr>
                    <tr>
                        <td><code>label</code></td>
                        <td>Wajib — teks tombol trigger</td>
                    </tr>
                    <tr>
                        <td><code>noArrow</code></td>
                        <td>Sembunyikan ikon panah</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
