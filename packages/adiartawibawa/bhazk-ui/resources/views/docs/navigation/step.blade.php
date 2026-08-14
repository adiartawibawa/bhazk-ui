<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Navigation</span>
        <h1 class="text-3xl font-bold">Steps</h1>
        <p class="text-base-content/70 mt-2">
            Menampilkan progres pengguna melalui serangkaian langkah.
        </p>
    </div>

    {{-- Live Preview --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — dengan Navigasi Button</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 flex flex-col items-center gap-6">
            <x-navigation.steps>
                <x-navigation.step-item variant="primary">Daftar</x-navigation.step-item>
                <x-navigation.step-item variant="primary">Pilih Paket</x-navigation.step-item>
                <x-navigation.step-item>Pembayaran</x-navigation.step-item>
                <x-navigation.step-item>Selesai</x-navigation.step-item>
            </x-navigation.steps>

            <div class="flex gap-2">
                <x-actions.button variant="ghost" size="sm">Sebelumnya</x-actions.button>
                <x-actions.button variant="primary" size="sm">Lanjut</x-actions.button>
            </div>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Digabung dengan <code>&lt;x-actions.button&gt;</code> untuk navigasi
            antar langkah — pola umum di formulir bertahap (wizard).
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Vertikal</h2>
            <div class="border border-base-300 rounded-box p-8 bg-base-100">
                <x-navigation.steps direction="vertical">
                    <x-navigation.step-item variant="primary">Daftar</x-navigation.step-item>
                    <x-navigation.step-item variant="primary">Pilih Paket</x-navigation.step-item>
                    <x-navigation.step-item>Pembayaran</x-navigation.step-item>
                    <x-navigation.step-item>Selesai</x-navigation.step-item>
                </x-navigation.steps>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Responsive (Vertikal di Mobile, Horizontal di Desktop)</h2>
            <div class="border border-base-300 rounded-box p-8 bg-base-100">
                <x-navigation.steps direction="vertical" class="lg:steps-horizontal">
                    <x-navigation.step-item variant="primary">Daftar</x-navigation.step-item>
                    <x-navigation.step-item variant="primary">Pilih Paket</x-navigation.step-item>
                    <x-navigation.step-item>Pembayaran</x-navigation.step-item>
                    <x-navigation.step-item>Selesai</x-navigation.step-item>
                </x-navigation.steps>
            </div>
            <p class="text-sm text-base-content/60 mt-2">
                Perkecil lebar browser untuk melihat perubahan tata letak.
            </p>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Dengan Icon Emoji</h2>
            <div class="border border-base-300 rounded-box p-8 bg-base-100">
                <x-navigation.steps>
                    <x-navigation.step-item variant="neutral" icon="😕">Langkah 1</x-navigation.step-item>
                    <x-navigation.step-item variant="neutral" icon="😃">Langkah 2</x-navigation.step-item>
                    <x-navigation.step-item icon="😍">Langkah 3</x-navigation.step-item>
                </x-navigation.steps>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Dengan Simbol Custom (data-content)</h2>
            <div class="border border-base-300 rounded-box p-8 bg-base-100">
                <x-navigation.steps>
                    <x-navigation.step-item variant="neutral" content="?">Langkah 1</x-navigation.step-item>
                    <x-navigation.step-item variant="neutral" content="!">Langkah 2</x-navigation.step-item>
                    <x-navigation.step-item variant="neutral" content="✓">Langkah 3</x-navigation.step-item>
                    <x-navigation.step-item content="★">Langkah 4</x-navigation.step-item>
                </x-navigation.steps>
            </div>
            <p class="text-sm text-base-content/60 mt-2">
                Prop <code>content</code> mengganti angka bullet default dengan
                simbol apa pun via atribut <code>data-content</code>.
            </p>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Menandai Step Aktif (di luar Selesai)</h2>
            <div class="border border-base-300 rounded-box p-8 bg-base-100">
                <x-navigation.steps>
                    <x-navigation.step-item variant="primary" content="✓">Daftar</x-navigation.step-item>
                    <x-navigation.step-item variant="primary" content="✓">Pilih Paket</x-navigation.step-item>
                    <x-navigation.step-item variant="primary" content="●">Pembayaran</x-navigation.step-item>
                    <x-navigation.step-item>Selesai</x-navigation.step-item>
                </x-navigation.steps>
            </div>
            <div role="alert" class="alert alert-info mt-3 text-sm">
                <span>
                    DaisyUI tidak punya state "aktif" bawaan yang berbeda dari
                    "selesai" — keduanya sama-sama pakai <code>step-{variant}</code>.
                    Untuk membedakan visual step yang sedang berjalan, gunakan
                    <code>content</code> berbeda (mis. <code>✓</code> untuk selesai,
                    <code>●</code> untuk yang sedang aktif) seperti dicontohkan di atas.
                </span>
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-navigation.steps&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;x-navigation.step-item variant="primary"&gt;Daftar&lt;/x-navigation.step-item&gt;</code></pre>
            <pre data-prefix="3"><code>    &lt;x-navigation.step-item&gt;Pembayaran&lt;/x-navigation.step-item&gt;</code></pre>
            <pre data-prefix="4"><code>&lt;/x-navigation.steps&gt;</code></pre>
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
                        <td><code>&lt;x-navigation.steps&gt;</code></td>
                        <td><code>direction</code></td>
                        <td>horizontal (default), vertical</td>
                    </tr>
                    <tr>
                        <td rowspan="3"><code>&lt;x-navigation.step-item&gt;</code></td>
                        <td><code>variant</code></td>
                        <td>primary, secondary, accent, neutral, info, success, warning, error</td>
                    </tr>
                    <tr>
                        <td><code>icon</code></td>
                        <td>Opsional — emoji/ikon di bullet</td>
                    </tr>
                    <tr>
                        <td><code>content</code></td>
                        <td>Opsional — simbol custom via data-content</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
