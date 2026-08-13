<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Data Display</span>
        <h1 class="text-3xl font-bold">Diff</h1>
        <p class="text-base-content/70 mt-2">
            Perbandingan dua item berdampingan dengan slider geser. Murni CSS —
            tidak membutuhkan JavaScript sama sekali.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100">
            <x-data-display.diff class="rounded-box">
                <x-slot:before>
                    <img alt="Before" src="https://img.daisyui.com/images/stock/photo-1560717789-0ac7c58ac90a.webp" />
                </x-slot:before>
                <x-slot:after>
                    <img alt="After"
                        src="https://img.daisyui.com/images/stock/photo-1560717789-0ac7c58ac90a-blur.webp" />
                </x-slot:after>
            </x-data-display.diff>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Geser slider di tengah untuk membandingkan kedua gambar.
        </p>
    </section>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Konten Non-Gambar</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100">
            <x-data-display.diff class="rounded-box">
                <x-slot:before>
                    <div class="bg-primary text-primary-content grid place-content-center text-7xl font-black">
                        BHAZK
                    </div>
                </x-slot:before>
                <x-slot:after>
                    <div class="bg-base-200 grid place-content-center text-7xl font-black">
                        BHAZK
                    </div>
                </x-slot:after>
            </x-data-display.diff>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-data-display.diff&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;x-slot:before&gt;&lt;img src="sebelum.jpg" /&gt;&lt;/x-slot:before&gt;</code></pre>
            <pre data-prefix="3"><code>    &lt;x-slot:after&gt;&lt;img src="sesudah.jpg" /&gt;&lt;/x-slot:after&gt;</code></pre>
            <pre data-prefix="4"><code>&lt;/x-data-display.diff&gt;</code></pre>
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
                        <td><code>aspect</code></td>
                        <td>string</td>
                        <td>aspect-16/9</td>
                        <td>Class rasio aspek Tailwind</td>
                    </tr>
                    <tr>
                        <td><code>before</code> <span class="text-base-content/50">(slot)</span></td>
                        <td>slot</td>
                        <td>—</td>
                        <td>Wajib — item pertama (kronologis lebih awal)</td>
                    </tr>
                    <tr>
                        <td><code>after</code> <span class="text-base-content/50">(slot)</span></td>
                        <td>slot</td>
                        <td>—</td>
                        <td>Wajib — item kedua</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
