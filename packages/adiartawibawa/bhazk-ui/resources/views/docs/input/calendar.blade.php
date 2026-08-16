<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Input</span>
        <h1 class="text-3xl font-bold">Calendar</h1>
        <p class="text-base-content/70 mt-2">
            Kalender/date picker berbasis web component
            <a href="https://wicky.nillia.ms/cally/" target="_blank" class="link link-primary">Cally</a>.
            DaisyUI hanya menyediakan styling, bukan komponen kalender mandiri.
        </p>
    </div>

    <div role="alert" class="alert alert-warning mb-10 text-sm">
        <span>
            Komponen ini butuh package <code>cally</code> ter-install
            (<code>npm install cally</code>) dan ter-import di
            <code>resources/js/app.js</code>. Tanpa itu, kalender tampil kosong
            tanpa fungsi karena custom element belum terdaftar di browser.
        </span>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Inline</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 flex justify-center">
            <x-input.calendar />
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Date Picker (Popover)</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100">
            <x-input.date-picker id="dp-demo" placeholder="Klik untuk pilih tanggal" />
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Menggabungkan teknik Popover API + CSS Anchor Positioning yang
            sama seperti komponen Megamenu.
        </p>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-input.date-picker id="tgl-lahir" placeholder="Pilih tanggal lahir" /&gt;</code></pre>
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
                        <td rowspan="3"><code>&lt;x-input.calendar&gt;</code></td>
                        <td><code>value</code></td>
                        <td>Tanggal terisi (YYYY-MM-DD)</td>
                    </tr>
                    <tr>
                        <td><code>min</code> / <code>max</code></td>
                        <td>Batas tanggal yang bisa dipilih</td>
                    </tr>
                    <tr>
                        <td rowspan="3"><code>&lt;x-input.date-picker&gt;</code></td>
                        <td><code>id</code></td>
                        <td>Wajib, unik</td>
                    </tr>
                    <tr>
                        <td><code>placeholder</code></td>
                        <td>Teks saat belum ada tanggal terpilih</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
