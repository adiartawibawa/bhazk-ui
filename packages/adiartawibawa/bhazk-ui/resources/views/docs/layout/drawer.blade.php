<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Layout</span>
        <h1 class="text-3xl font-bold">Drawer Sidebar</h1>
        <p class="text-base-content/70 mt-2">
            Panel sidebar yang bisa disembunyikan/ditampilkan — murni CSS lewat
            <code>&lt;input type="checkbox"&gt;</code> tersembunyi, tanpa JS/Alpine.
        </p>
    </div>

    <div role="alert" class="alert alert-info mb-10 text-sm">
        <span>
            Setiap demo di bawah dirender dalam <code>&lt;iframe&gt;</code> terisolasi.
            Ini perlu khusus untuk komponen Drawer — karena halaman dokumentasi ini
            sendiri memakai struktur <code>.drawer</code> untuk sidebar navigasinya,
            merender demo drawer secara langsung di halaman yang sama menyebabkan
            dua struktur <code>.drawer</code> bertabrakan (overlay macet, tidak bisa
            ditutup). Iframe memberi setiap demo dokumen dan viewport-nya sendiri
            yang sepenuhnya independen. Di aplikasi produksi sungguhan (bukan
            halaman dokumentasi ini), pemakaian normal <code>&lt;x-layout.drawer&gt;</code>
            langsung tanpa iframe sudah benar dan tidak perlu trik apa pun.
        </span>
    </div>

    {{-- Live Preview --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Navbar + Menu</h2>
        <div class="border border-base-300 rounded-box overflow-hidden">
            <iframe src="{{ route('layout.drawer.embed.navbar') }}" class="w-full h-72"
                title="Demo Drawer Navbar"></iframe>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Menggabungkan <code>&lt;x-navigation.navbar&gt;</code> dan
            <code>&lt;x-navigation.menu&gt;</code> yang sudah dibuat sebelumnya —
            klik ikon hamburger di dalam kotak preview untuk membuka sidebar.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Dasar</h2>
            <div class="border border-base-300 rounded-box overflow-hidden">
                <iframe src="{{ route('layout.drawer.embed.basic') }}" class="w-full h-56"
                    title="Demo Drawer Dasar"></iframe>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Selalu Terbuka di Layar Besar</h2>
            <p class="text-sm text-base-content/60 mb-3">
                Prop <code>openOnLarge="lg"</code> — lebar kotak preview ini
                sudah melebihi breakpoint <code>lg</code>, sehingga sidebar
                langsung terlihat tanpa perlu tombol.
            </p>
            <div class="border border-base-300 rounded-box overflow-hidden">
                <iframe src="{{ route('layout.drawer.embed.responsive') }}" class="w-full h-56"
                    title="Demo Drawer Responsive"></iframe>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Dari Sisi Kanan</h2>
            <div class="border border-base-300 rounded-box overflow-hidden">
                <iframe src="{{ route('layout.drawer.embed.end') }}" class="w-full h-56"
                    title="Demo Drawer dari Kanan"></iframe>
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <x-mockups.code class="w-full">
            <x-mockups.code-line prefix="1">&lt;x-layout.drawer id="my-drawer"&gt;</x-mockups.code-line>
            <x-mockups.code-line
                prefix="2">&nbsp;&nbsp;&nbsp;&nbsp;&lt;x-layout.drawer-content&gt;</x-mockups.code-line>
            <x-mockups.code-line
                prefix="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;x-layout.drawer-toggle-button
                target="my-drawer"&gt;Buka&lt;/x-layout.drawer-toggle-button&gt;</x-mockups.code-line>
            <x-mockups.code-line
                prefix="4">&nbsp;&nbsp;&nbsp;&nbsp;&lt;/x-layout.drawer-content&gt;</x-mockups.code-line>
            <x-mockups.code-line prefix="5"></x-mockups.code-line>
            <x-mockups.code-line
                prefix="6">&nbsp;&nbsp;&nbsp;&nbsp;&lt;x-layout.drawer-side&gt;</x-mockups.code-line>
            <x-mockups.code-line prefix="7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;x-navigation.menu
                class="bg-base-200 min-h-full w-64"&gt;...&lt;/x-navigation.menu&gt;</x-mockups.code-line>
            <x-mockups.code-line
                prefix="8">&nbsp;&nbsp;&nbsp;&nbsp;&lt;/x-layout.drawer-side&gt;</x-mockups.code-line>
            <x-mockups.code-line prefix="9">&lt;/x-layout.drawer&gt;</x-mockups.code-line>
        </x-mockups.code>

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
                        <td rowspan="1"><code>&lt;x-layout.drawer-side&gt;</code> / <code>drawer-toggle-button</code>
                        </td>
                        <td><code>target</code></td>
                        <td>Wajib — sama dengan id drawer induk</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
