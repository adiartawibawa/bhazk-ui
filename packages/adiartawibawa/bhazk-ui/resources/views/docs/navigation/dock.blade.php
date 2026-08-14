<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Navigation</span>
        <h1 class="text-3xl font-bold">Dock</h1>
        <p class="text-base-content/70 mt-2">
            Bilah navigasi yang menempel di bagian bawah layar — cocok untuk
            navigasi utama di tampilan mobile.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview</h2>
        <div class="bg-base-300 rounded-box w-full max-w-sm pt-24 mx-auto">
            <x-navigation.dock class="relative border border-base-300">
                <x-navigation.dock-item active label="Beranda">🏠</x-navigation.dock-item>
                <x-navigation.dock-item label="Pencarian">🔍</x-navigation.dock-item>
                <x-navigation.dock-item label="Profil">👤</x-navigation.dock-item>
                <x-navigation.dock-item label="Terkunci" disabled>🔒</x-navigation.dock-item>
            </x-navigation.dock>
        </div>
        <div role="alert" class="alert alert-warning mt-4 text-sm">
            <span>
                Class <code>relative</code> di sini <strong>khusus untuk kebutuhan
                    preview</strong> — membatalkan sementara <code>position: fixed</code>
                bawaan agar dock terkurung dalam kotak demo. Di aplikasi produksi,
                <strong>jangan</strong> tambahkan <code>relative</code> — biarkan
                dock benar-benar menempel ke bawah layar sungguhan.
            </span>
        </div>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Ukuran</h2>
            <div class="space-y-6">
                @foreach (['xs', 'sm', 'md', 'lg'] as $size)
                    <div class="bg-base-300 rounded-box w-full max-w-sm pt-16 mx-auto">
                        <x-navigation.dock :size="$size" class="relative border border-base-300">
                            <x-navigation.dock-item active label="{{ strtoupper($size) }}">🏠</x-navigation.dock-item>
                            <x-navigation.dock-item label="Cari">🔍</x-navigation.dock-item>
                            <x-navigation.dock-item label="Profil">👤</x-navigation.dock-item>
                        </x-navigation.dock>
                    </div>
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Warna Custom</h2>
            <div class="bg-base-300 rounded-box w-full max-w-sm pt-24 mx-auto">
                <x-navigation.dock class="relative bg-neutral text-neutral-content">
                    <x-navigation.dock-item active label="Beranda">🏠</x-navigation.dock-item>
                    <x-navigation.dock-item label="Pesan">💬</x-navigation.dock-item>
                </x-navigation.dock>
            </div>
            <p class="text-sm text-base-content/60 mt-2">
                Warna latar bisa dikustom langsung lewat class Tailwind biasa
                (<code>bg-neutral text-neutral-content</code>), tanpa prop khusus.
            </p>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Sebagai Link</h2>
            <div class="bg-base-300 rounded-box w-full max-w-sm pt-24 mx-auto">
                <x-navigation.dock class="relative border border-base-300">
                    <x-navigation.dock-item href="/" active label="Beranda">🏠</x-navigation.dock-item>
                    <x-navigation.dock-item href="/pesan" label="Pesan">💬</x-navigation.dock-item>
                </x-navigation.dock>
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai (Produksi)</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>{{-- Taruh di layout utama, di luar <main>, TANPA class "relative" --}}</code></pre>
            <pre data-prefix="2"><code>&lt;x-navigation.dock&gt;</code></pre>
            <pre data-prefix="3"><code>    &lt;x-navigation.dock-item href="/" active label="Beranda"&gt;🏠&lt;/x-navigation.dock-item&gt;</code></pre>
            <pre data-prefix="4"><code>    &lt;x-navigation.dock-item href="/cari" label="Cari"&gt;🔍&lt;/x-navigation.dock-item&gt;</code></pre>
            <pre data-prefix="5"><code>&lt;/x-navigation.dock&gt;</code></pre>
        </div>

        <div role="alert" class="alert alert-info mt-4 text-sm">
            <span>
                Tambahkan <code>&lt;meta name="viewport" content="viewport-fit=cover"&gt;</code>
                di <code>&lt;head&gt;</code> layout — wajib agar dock responsif dengan
                benar di perangkat iOS (area notch/home-indicator).
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
                        <td><code>&lt;x-navigation.dock&gt;</code></td>
                        <td><code>size</code></td>
                        <td>xs, sm, md (default), lg, xl</td>
                    </tr>
                    <tr>
                        <td rowspan="4"><code>&lt;x-navigation.dock-item&gt;</code></td>
                        <td><code>href</code></td>
                        <td>Diisi = &lt;a&gt;; kosong = &lt;button&gt;</td>
                    </tr>
                    <tr>
                        <td><code>active</code></td>
                        <td>Tandai item terpilih</td>
                    </tr>
                    <tr>
                        <td><code>disabled</code></td>
                        <td>Nonaktifkan item</td>
                    </tr>
                    <tr>
                        <td><code>label</code></td>
                        <td>Teks di bawah ikon</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
