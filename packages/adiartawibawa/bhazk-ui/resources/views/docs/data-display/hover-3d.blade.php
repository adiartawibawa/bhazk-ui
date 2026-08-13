<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Data Display</span>
        <h1 class="text-3xl font-bold">Hover 3D</h1>
        <p class="text-base-content/70 mt-2">
            Wrapper yang menambahkan efek tilt 3D saat mouse bergerak di atas
            konten — murni CSS, tanpa JavaScript.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Membungkus Card</h2>
        <div class="border border-base-300 rounded-box p-12 flex justify-center bg-base-100">
            <x-data-display.hover-3d href="#" class="cursor-pointer">
                <x-data-display.card class="w-80 bg-neutral text-neutral-content" border>
                    <x-slot:title>Kartu Interaktif</x-slot:title>
                    <p class="text-sm">Gerakkan mouse di atas kartu ini untuk melihat efek tilt 3D.</p>
                </x-data-display.card>
            </x-data-display.hover-3d>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Membungkus <code>&lt;x-data-display.card&gt;</code> — komponen apa pun
            bisa ditaruh di dalam <code>hover-3d</code> tanpa modifikasi khusus.
        </p>
    </section>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Membungkus Gambar</h2>
        <div class="border border-base-300 rounded-box p-12 flex flex-wrap justify-center gap-8 bg-base-100">
            <x-data-display.hover-3d>
                <figure class="w-60 rounded-2xl">
                    <img src="https://img.daisyui.com/images/stock/card-1.webp" alt="3D hover" />
                </figure>
            </x-data-display.hover-3d>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-data-display.hover-3d href="/produk/1"&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;x-data-display.card class="w-80"&gt;...&lt;/x-data-display.card&gt;</code></pre>
            <pre data-prefix="3"><code>&lt;/x-data-display.hover-3d&gt;</code></pre>
        </div>

        <div role="alert" class="alert alert-info mt-4 text-sm">
            <span>
                8 elemen kosong di dalam komponen ini bagian dari mekanisme resmi
                DaisyUI (masing-masing mendeteksi posisi mouse di satu zona) — sudah
                ditangani otomatis, tidak perlu ditulis manual oleh consumer.
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
                        <td><code>href</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>Jika diisi, dirender sebagai &lt;a&gt; agar seluruh area bisa diklik</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
