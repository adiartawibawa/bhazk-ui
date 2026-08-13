<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Data Display</span>
        <h1 class="text-3xl font-bold">Accordion</h1>
        <p class="text-base-content/70 mt-2">
            Sekelompok item collapse yang saling eksklusif — membuka satu item
            otomatis menutup item lain dalam grup yang sama. Secara teknis,
            DaisyUI mengimplementasikan ini sebagai <code>collapse</code> dengan
            <code>&lt;input type="radio"&gt;</code> bernama sama, bukan class terpisah.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 space-y-2">
            <x-data-display.accordion name="faq-demo" open class="bg-base-200 border border-base-300">
                <x-slot:title>Apa itu Bhazk UI?</x-slot:title>
                Library komponen Blade reusable berbasis DaisyUI 5 dan AlpineJS.
            </x-data-display.accordion>

            <x-data-display.accordion name="faq-demo" class="bg-base-200 border border-base-300">
                <x-slot:title>Apakah gratis dipakai?</x-slot:title>
                Ya, sepenuhnya open-source untuk dipakai di proyek apa pun.
            </x-data-display.accordion>

            <x-data-display.accordion name="faq-demo" class="bg-base-200 border border-base-300">
                <x-slot:title>Bagaimana cara kontribusi?</x-slot:title>
                Buka repository dan ajukan pull request untuk komponen baru.
            </x-data-display.accordion>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Coba buka item kedua atau ketiga — item pertama otomatis tertutup
            karena ketiganya berbagi <code>name="faq-demo"</code> yang sama.
        </p>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-data-display.accordion name="faq-group-1" open&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;x-slot:title&gt;Pertanyaan 1&lt;/x-slot:title&gt;</code></pre>
            <pre data-prefix="3"><code>    Jawaban pertanyaan 1.</code></pre>
            <pre data-prefix="4"><code>&lt;/x-data-display.accordion&gt;</code></pre>
            <pre data-prefix="5"><code></code></pre>
            <pre data-prefix="6"><code>&lt;x-data-display.accordion name="faq-group-1"&gt;</code></pre>
            <pre data-prefix="7"><code>    &lt;x-slot:title&gt;Pertanyaan 2&lt;/x-slot:title&gt;</code></pre>
            <pre data-prefix="8"><code>    Jawaban pertanyaan 2.</code></pre>
            <pre data-prefix="9"><code>&lt;/x-data-display.accordion&gt;</code></pre>
        </div>

        <div role="alert" class="alert alert-warning mt-4 text-sm">
            <span>
                Pastikan setiap grup accordion di halaman yang sama memakai
                <code>name</code> yang <strong>unik per grup</strong> — jika dua grup
                berbeda kebetulan memakai <code>name</code> sama, keduanya akan
                saling memengaruhi seolah satu grup.
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
                        <td><code>name</code></td>
                        <td>string</td>
                        <td>— (wajib)</td>
                        <td>Item dengan name sama membentuk satu grup radio</td>
                    </tr>
                    <tr>
                        <td><code>icon</code></td>
                        <td>string|null</td>
                        <td>arrow</td>
                        <td>arrow, plus, null</td>
                    </tr>
                    <tr>
                        <td><code>open</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>Item yang aktif saat render pertama dalam grup</td>
                    </tr>
                    <tr>
                        <td><code>title</code> <span class="text-base-content/50">(slot)</span></td>
                        <td>slot</td>
                        <td>—</td>
                        <td>Wajib — judul item</td>
                    </tr>
                    <tr>
                        <td><code>$slot</code> <span class="text-base-content/50">(default)</span></td>
                        <td>slot</td>
                        <td>—</td>
                        <td>Konten jawaban/isi item</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
