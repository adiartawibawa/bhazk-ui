<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Feedback</span>
        <h1 class="text-3xl font-bold">Alert</h1>
        <p class="text-base-content/70 mt-2">
            Menampilkan pesan penting kepada pengguna — info, sukses, peringatan, atau error.
        </p>
    </div>

    {{-- Live Preview --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Dismissible dengan Button</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 space-y-3">
            <x-feedback.alert variant="success" dismissible>
                <x-slot:icon>✓</x-slot:icon>
                Perubahan berhasil disimpan!
            </x-feedback.alert>

            <x-feedback.alert variant="error">
                <x-slot:icon>✕</x-slot:icon>
                Gagal memproses pembayaran. <x-actions.button variant="ghost" size="xs">Coba Lagi</x-actions.button>
            </x-feedback.alert>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Alert pertama bisa ditutup (klik ✕, animasi fade-out via Alpine).
            Alert kedua menggabungkan <code>&lt;x-actions.button&gt;</code> sebagai aksi inline.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Varian Warna</h2>
            <div class="space-y-3">
                <x-feedback.alert variant="info">12 pesan belum dibaca. Ketuk untuk melihat.</x-feedback.alert>
                <x-feedback.alert variant="success">Pembelian Anda telah dikonfirmasi!</x-feedback.alert>
                <x-feedback.alert variant="warning">Peringatan: Alamat email tidak valid!</x-feedback.alert>
                <x-feedback.alert variant="error">Error! Tugas gagal dengan sukses.</x-feedback.alert>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Style: Outline</h2>
            <div class="space-y-3">
                <x-feedback.alert variant="info" style="outline">12 pesan belum dibaca.</x-feedback.alert>
                <x-feedback.alert variant="success" style="outline">Pembelian dikonfirmasi!</x-feedback.alert>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Style: Dash</h2>
            <div class="space-y-3">
                <x-feedback.alert variant="warning" style="dash">Peringatan: Sesi akan berakhir.</x-feedback.alert>
                <x-feedback.alert variant="error" style="dash">Koneksi terputus.</x-feedback.alert>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Style: Soft</h2>
            <div class="space-y-3">
                <x-feedback.alert variant="info" style="soft">12 pesan belum dibaca.</x-feedback.alert>
                <x-feedback.alert variant="success" style="soft">Pembelian dikonfirmasi!</x-feedback.alert>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Arah: Vertikal vs Horizontal</h2>
            <div class="space-y-3">
                <x-feedback.alert variant="info" direction="vertical" class="sm:alert-horizontal">
                    <x-slot:icon>ℹ️</x-slot:icon>
                    Fitur baru tersedia! Perbarui aplikasi Anda sekarang.
                    <x-actions.button variant="primary" size="xs">Perbarui</x-actions.button>
                </x-feedback.alert>
            </div>
            <p class="text-sm text-base-content/60 mt-2">
                Perkecil lebar browser untuk melihat perubahan dari horizontal ke vertikal
                (memakai <code>class="sm:alert-horizontal"</code> responsive).
            </p>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Dengan Icon SVG</h2>
            <x-feedback.alert variant="error">
                <x-slot:icon>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </x-slot:icon>
                Error! Terjadi kesalahan pada server.
            </x-feedback.alert>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-feedback.alert variant="success" dismissible&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;x-slot:icon&gt;✓&lt;/x-slot:icon&gt;</code></pre>
            <pre data-prefix="3"><code>    Perubahan berhasil disimpan!</code></pre>
            <pre data-prefix="4"><code>&lt;/x-feedback.alert&gt;</code></pre>
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
                        <td><code>variant</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>info, success, warning, error (hanya 4 — tidak ada primary/neutral)</td>
                    </tr>
                    <tr>
                        <td><code>style</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>outline, dash, soft</td>
                    </tr>
                    <tr>
                        <td><code>direction</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>vertical, horizontal</td>
                    </tr>
                    <tr>
                        <td><code>icon</code></td>
                        <td>string|slot</td>
                        <td>null</td>
                        <td>Opsional — ikon di depan pesan</td>
                    </tr>
                    <tr>
                        <td><code>dismissible</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>Tampilkan tombol ✕ untuk menutup (Alpine, tanpa reload)</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
