<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Actions</span>
        <h1 class="text-3xl font-bold">FAB / Speed Dial</h1>
        <p class="text-base-content/70 mt-2">
            Tombol aksi mengambang yang memunculkan beberapa opsi tambahan saat
            diklik/fokus, dalam susunan vertikal atau melengkung (flower).
            Murni CSS <code>:focus-within</code>, tanpa Alpine.
        </p>
    </div>

    {{-- Live Interactive Preview --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Dasar (Vertikal)</h2>
        <div class="border border-base-300 rounded-box p-8 relative h-72 bg-base-100 overflow-hidden">
            <p class="text-sm text-base-content/50">Klik tombol di pojok kanan bawah area ini.</p>

            <x-actions.fab position="bottom-right" class="!absolute">
                <x-slot:trigger>+</x-slot:trigger>

                <x-actions.button size="lg" circle aria-label="Edit">✎</x-actions.button>
                <x-actions.button size="lg" circle aria-label="Share">🔗</x-actions.button>
                <x-actions.button size="lg" circle aria-label="Delete">🗑</x-actions.button>
            </x-actions.fab>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Di halaman produksi (bukan di dalam container terbatas seperti demo
            ini), gunakan <code>position</code> tanpa override <code>class="!absolute"</code>
            supaya benar-benar <code>fixed</code> terhadap viewport.
        </p>
    </section>

    {{-- Variasi Showcase --}}
    <section class="mb-12 space-y-10">
        <div>
            <h2 class="text-xl font-semibold mb-3">Mode: fab-close</h2>
            <p class="text-sm text-base-content/60 mb-3">
                Tombol utama digantikan tombol close (✕) saat FAB terbuka —
                cocok saat aksi utama hanya berfungsi sebagai toggle.
            </p>
            <div class="border border-base-300 rounded-box p-8 relative h-64 bg-base-100 overflow-hidden">
                <x-actions.fab position="bottom-right" variant="info" mode="close" close-label="Tutup"
                    class="!absolute">
                    <x-slot:trigger>F</x-slot:trigger>

                    <div>Label A <x-actions.button size="lg" circle>A</x-actions.button></div>
                    <div>Label B <x-actions.button size="lg" circle>B</x-actions.button></div>
                    <div>Label C <x-actions.button size="lg" circle>C</x-actions.button></div>
                </x-actions.fab>
            </div>
            <p class="text-xs text-base-content/50 mt-2">
                Catatan: elemen tombol ✕ di <code>fab-close</code> tetap ditulis sebagai
                <code>&lt;span&gt;</code> polos di dalam komponen (bukan
                <code>&lt;x-actions.button&gt;</code>) — sesuai spesifikasi resmi DaisyUI,
                elemen ini sengaja <strong>tidak boleh focusable</strong> supaya klik di
                areanya berfungsi menutup FAB, bukan memicu aksi baru.
            </p>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Mode: fab-main-action</h2>
            <p class="text-sm text-base-content/60 mb-3">
                Tombol utama digantikan tombol aksi nyata (bukan sekadar close) —
                cocok saat trigger sendiri punya fungsi utama, mis. "Buat Baru".
            </p>
            <div class="border border-base-300 rounded-box p-8 relative h-64 bg-base-100 overflow-hidden">
                <x-actions.fab position="bottom-right" variant="primary" mode="main-action" class="!absolute">
                    <x-slot:trigger>F</x-slot:trigger>
                    <x-slot:mainAction>
                        <x-actions.button variant="secondary" circle size="lg">M</x-actions.button>
                    </x-slot:mainAction>

                    <div>Label A <x-actions.button size="lg" circle>A</x-actions.button></div>
                    <div>Label B <x-actions.button size="lg" circle>B</x-actions.button></div>
                    <div>Label C <x-actions.button size="lg" circle>C</x-actions.button></div>
                </x-actions.fab>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Flower (Quarter Circle)</h2>
            <p class="text-sm text-base-content/60 mb-3">
                Modifier <code>flower</code> membuka item dalam lengkungan seperempat
                lingkaran, menampung hingga 4 tombol aksi. Karena ruang terbatas,
                gunakan tooltip alih-alih label teks.
            </p>
            <div class="border border-base-300 rounded-box p-8 relative h-72 bg-base-100 overflow-hidden">
                <x-actions.fab position="bottom-right" variant="success" mode="main-action" flower class="!absolute">
                    <x-slot:trigger>F</x-slot:trigger>
                    <x-slot:mainAction>
                        <x-actions.button variant="neutral" circle size="lg">M</x-actions.button>
                    </x-slot:mainAction>

                    <div class="tooltip tooltip-left" data-tip="Label A">
                        <x-actions.button size="lg" circle>A</x-actions.button>
                    </div>
                    <div class="tooltip tooltip-left" data-tip="Label B">
                        <x-actions.button size="lg" circle>B</x-actions.button>
                    </div>
                    <div class="tooltip" data-tip="Label C">
                        <x-actions.button size="lg" circle>C</x-actions.button>
                    </div>
                    <div class="tooltip" data-tip="Label D">
                        <x-actions.button size="lg" circle>D</x-actions.button>
                    </div>
                </x-actions.fab>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Tombol Persegi (Tanpa circle)</h2>
            <p class="text-sm text-base-content/60 mb-3">
                Cukup hilangkan prop <code>circle</code> di tombol item untuk tampilan persegi biasa.
            </p>
            <div class="border border-base-300 rounded-box p-8 relative h-64 bg-base-100 overflow-hidden">
                <x-actions.fab position="bottom-right" variant="warning" class="!absolute">
                    <x-slot:trigger>F</x-slot:trigger>

                    <x-actions.button size="lg">Simpan</x-actions.button>
                    <x-actions.button size="lg">Ekspor</x-actions.button>
                    <x-actions.button size="lg">Bagikan</x-actions.button>
                </x-actions.fab>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Single FAB (Tanpa Speed Dial)</h2>
            <p class="text-sm text-base-content/60 mb-3">
                Jika hanya butuh satu tombol mengambang tanpa opsi tambahan, cukup
                jangan isi <code>$slot</code> item aksi.
            </p>
            <div class="border border-base-300 rounded-box p-8 relative h-40 bg-base-100 overflow-hidden">
                <x-actions.fab position="bottom-right" variant="accent" class="!absolute">
                    <x-slot:trigger>+</x-slot:trigger>
                </x-actions.fab>
            </div>
        </div>
    </section>

    {{-- Code Usage Guide --}}
    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-actions.fab position="bottom-right" variant="primary" mode="close"&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;x-slot:trigger&gt;+&lt;/x-slot:trigger&gt;</code></pre>
            <pre data-prefix="3"><code></code></pre>
            <pre data-prefix="4"><code>    &lt;x-actions.button size="lg" circle&gt;✎&lt;/x-actions.button&gt;</code></pre>
            <pre data-prefix="5"><code>    &lt;x-actions.button size="lg" circle&gt;🗑&lt;/x-actions.button&gt;</code></pre>
            <pre data-prefix="6"><code>&lt;/x-actions.fab&gt;</code></pre>
        </div>

        <div role="alert" class="alert alert-warning mt-4 text-sm">
            <span>
                <code>mode="close"</code> dan <code>mode="main-action"</code> tidak boleh
                dipakai bersamaan — komponen otomatis mengabaikan <code>mode</code> yang
                tidak valid dan jatuh ke perilaku default (tanpa penggantian tombol utama).
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
                        <td><code>position</code></td>
                        <td>string</td>
                        <td>bottom-right</td>
                        <td>bottom-right, bottom-left, top-right, top-left</td>
                    </tr>
                    <tr>
                        <td><code>variant</code></td>
                        <td>string</td>
                        <td>primary</td>
                        <td>Warna tombol trigger utama</td>
                    </tr>
                    <tr>
                        <td><code>mode</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>null, close, main-action (saling eksklusif)</td>
                    </tr>
                    <tr>
                        <td><code>flower</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>Buka dalam quarter-circle, maksimal 4 item aksi</td>
                    </tr>
                    <tr>
                        <td><code>closeLabel</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>Teks di samping tombol ✕ (khusus mode close)</td>
                    </tr>
                    <tr>
                        <td><code>trigger</code> <span class="text-base-content/50">(slot)</span></td>
                        <td>slot</td>
                        <td>—</td>
                        <td>Isi tombol utama</td>
                    </tr>
                    <tr>
                        <td><code>mainAction</code> <span class="text-base-content/50">(slot)</span></td>
                        <td>slot</td>
                        <td>—</td>
                        <td>Wajib diisi jika mode="main-action" — gunakan <code>&lt;x-actions.button&gt;</code></td>
                    </tr>
                    <tr>
                        <td><code>$slot</code> <span class="text-base-content/50">(default)</span></td>
                        <td>slot</td>
                        <td>—</td>
                        <td>Item aksi — gunakan <code>&lt;x-actions.button&gt;</code>, maksimal 4 untuk flower</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
