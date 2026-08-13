<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Data Display</span>
        <h1 class="text-3xl font-bold">Text Rotate</h1>
        <p class="text-base-content/70 mt-2">
            Menampilkan beberapa kata secara bergantian dengan animasi loop otomatis —
            maksimal 6 baris, jeda otomatis saat di-hover.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — dengan Button</h2>
        <div class="border border-base-300 rounded-box p-12 flex flex-col items-center gap-6 bg-base-100">
            <p class="text-2xl">
                Menyediakan AI Agent untuk
                <x-data-display.text-rotate :words="['Desainer', 'Developer', 'Manajer']" class="font-bold text-primary" />
            </p>
            <x-actions.button variant="primary">Coba Gratis</x-actions.button>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Cukup pakai prop <code>words</code> dengan array string — tidak perlu
            menulis markup <code>&lt;span&gt;</code> bersarang manual.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Markup Manual (Styling per Kata)</h2>
            <div class="border border-base-300 rounded-box p-12 flex justify-center bg-base-100">
                <span class="text-2xl">
                    Providing AI Agents for
                    <x-data-display.text-rotate>
                        <span class="bg-teal-400 text-teal-800 px-2">Designers</span>
                        <span class="bg-red-400 text-red-800 px-2">Developers</span>
                        <span class="bg-blue-400 text-blue-800 px-2">Managers</span>
                    </x-data-display.text-rotate>
                </span>
            </div>
            <p class="text-sm text-base-content/60 mt-2">
                Ditulis manual lewat <code>$slot</code> saat tiap kata butuh
                styling berbeda (warna latar berbeda-beda).
            </p>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Ukuran Besar & Durasi Custom</h2>
            <div class="border border-base-300 rounded-box p-12 flex justify-center bg-base-100">
                <x-data-display.text-rotate :words="['📐 DESIGN', '⌨️ DEVELOP', '🌎 DEPLOY']" class="text-4xl leading-[2] duration-2000" />
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-data-display.text-rotate :words="['Cepat', 'Ringan', 'Modern']" /&gt;</code></pre>
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
                        <td><code>words</code></td>
                        <td>array</td>
                        <td>[]</td>
                        <td>Maksimal 6 kata/frasa, diabaikan jika slot diisi manual</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
