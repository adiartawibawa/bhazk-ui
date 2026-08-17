<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Feedback</span>
        <h1 class="text-3xl font-bold">Toast</h1>
        <p class="text-base-content/70 mt-2">
            Wrapper posisi untuk menumpuk elemen (biasanya alert) di salah satu
            sudut layar.
        </p>
    </div>

    {{-- Live Preview — dinamis --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Notifikasi Dinamis</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 relative min-h-64">
            <div class="flex flex-wrap gap-2">
                <x-actions.button variant="success" size="sm"
                    onclick="window.dispatchEvent(new CustomEvent('toast', { detail: { message: 'Berhasil disimpan!', variant: 'success' } }))">
                    Trigger Sukses
                </x-actions.button>
                <x-actions.button variant="error" size="sm"
                    onclick="window.dispatchEvent(new CustomEvent('toast', { detail: { message: 'Gagal memproses permintaan.', variant: 'error' } }))">
                    Trigger Error
                </x-actions.button>
            </div>

            <x-feedback.toast-live class="!absolute" />
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Klik tombol — notifikasi muncul dari pojok kanan-bawah kotak demo,
            otomatis hilang setelah 3 detik, atau bisa ditutup manual (✕).
            Di aplikasi produksi, taruh <code>&lt;x-feedback.toast-live /&gt;</code>
            sekali di layout utama (tanpa <code>!absolute</code>) supaya benar-benar
            <code>fixed</code> terhadap viewport.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Statis — Beberapa Alert Sekaligus</h2>
            <div class="relative border border-base-300 rounded-box p-8 bg-base-100 min-h-40">
                <x-feedback.toast horizontal="end" vertical="bottom" class="!absolute">
                    <x-feedback.alert variant="info">Email baru masuk.</x-feedback.alert>
                    <x-feedback.alert variant="success">Pesan terkirim.</x-feedback.alert>
                </x-feedback.toast>
            </div>
            <p class="text-sm text-base-content/60 mt-2">
                Mode statis menggabungkan <code>&lt;x-feedback.toast&gt;</code>
                dengan <code>&lt;x-feedback.alert&gt;</code> yang sudah dibuat sebelumnya —
                cocok untuk notifikasi yang selalu tampil, bukan sementara.
            </p>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Posisi</h2>
            <p class="text-sm text-base-content/60">
                Kombinasi <code>horizontal</code> (start/center/end) dan
                <code>vertical</code> (top/middle/bottom) — default: end + bottom
                (kanan-bawah).
            </p>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>

        <p class="font-semibold mb-2">Notifikasi Dinamis (Direkomendasikan)</p>
        <div class="mockup-code mb-6">
            <pre data-prefix="1"><code>{{-- Taruh sekali di layout utama --}}</code></pre>
            <pre data-prefix="2"><code>&lt;x-feedback.toast-live /&gt;</code></pre>
            <pre data-prefix="3"><code></code></pre>
            <pre data-prefix="4"><code>{{-- Trigger dari mana saja --}}</code></pre>
            <pre data-prefix="5"><code>window.dispatchEvent(new CustomEvent('toast', {</code></pre>
            <pre data-prefix="6"><code>    detail: { message: 'Berhasil disimpan!', variant: 'success' }</code></pre>
            <pre data-prefix="7"><code>}))</code></pre>
        </div>

        <div role="alert" class="alert alert-info mt-4 text-sm">
            <span>
                Dari Livewire, trigger lewat
                <code>$this->dispatch('toast', message: 'Tersimpan!', variant: 'success')-&gt;to('window')</code>
                atau <code>$this->js("window.dispatchEvent(new CustomEvent('toast', ...))")</code>
                — event browser native ini otomatis ditangkap oleh
                <code>x-on:toast.window</code> di komponen.
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
                        <td rowspan="2"><code>&lt;x-feedback.toast&gt;</code> / <code>toast-live</code></td>
                        <td><code>horizontal</code></td>
                        <td>start, center, end (default)</td>
                    </tr>
                    <tr>
                        <td><code>vertical</code></td>
                        <td>top, middle, bottom (default)</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
