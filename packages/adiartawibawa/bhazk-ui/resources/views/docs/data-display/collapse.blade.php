<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Data Display</span>
        <h1 class="text-3xl font-bold">Collapse</h1>
        <p class="text-base-content/70 mt-2">
            Menampilkan/menyembunyikan konten lewat satu toggle mandiri. Untuk
            kelompok item yang saling eksklusif (hanya satu terbuka sekaligus),
            gunakan komponen <a href="{{ route('docs.data-display.accordion') }}" class="link link-primary">Accordion</a>.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 space-y-3">
            <x-data-display.collapse icon="arrow" class="bg-base-200 border border-base-300">
                <x-slot:title>Bagaimana cara membuat akun?</x-slot:title>
                Klik tombol "Daftar" di pojok kanan atas lalu ikuti proses pendaftaran.
            </x-data-display.collapse>

            <x-data-display.collapse icon="plus" class="bg-base-200 border border-base-300">
                <x-slot:title>Apakah bisa membatalkan langganan?</x-slot:title>
                Bisa kapan saja lewat halaman Pengaturan &gt; Langganan.
            </x-data-display.collapse>
        </div>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Terbuka Sejak Awal</h2>
            <x-data-display.collapse icon="arrow" open class="bg-base-200 border border-base-300">
                <x-slot:title>Item ini sudah terbuka</x-slot:title>
                Konten langsung terlihat tanpa perlu diklik terlebih dahulu.
            </x-data-display.collapse>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-data-display.collapse icon="arrow"&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;x-slot:title&gt;Judul&lt;/x-slot:title&gt;</code></pre>
            <pre data-prefix="3"><code>    Isi konten yang disembunyikan.</code></pre>
            <pre data-prefix="4"><code>&lt;/x-data-display.collapse&gt;</code></pre>
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
                        <td><code>icon</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>arrow, plus</td>
                    </tr>
                    <tr>
                        <td><code>open</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>State awal saat render pertama</td>
                    </tr>
                    <tr>
                        <td><code>forceOpen</code> / <code>forceClose</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>Paksa state, mengabaikan interaksi pengguna</td>
                    </tr>
                    <tr>
                        <td><code>title</code> <span class="text-base-content/50">(slot)</span></td>
                        <td>slot</td>
                        <td>—</td>
                        <td>Wajib — judul yang selalu terlihat</td>
                    </tr>
                    <tr>
                        <td><code>$slot</code> <span class="text-base-content/50">(default)</span></td>
                        <td>slot</td>
                        <td>—</td>
                        <td>Konten yang disembunyikan/ditampilkan</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
