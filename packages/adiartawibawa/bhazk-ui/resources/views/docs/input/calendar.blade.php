<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Input</span>
        <h1 class="text-3xl font-bold">Calendar</h1>
        <p class="text-base-content/70 mt-2">
            Kalender & date picker murni Alpine + DaisyUI — tanpa library
            eksternal apa pun. DaisyUI sendiri tidak menyediakan komponen
            kalender mandiri (hanya styling untuk library pihak ketiga seperti
            Cally), sehingga logic navigasi bulan dan pemilihan tanggal
            sepenuhnya ditulis manual di sini, mengikuti prinsip yang sama
            seperti komponen Countdown.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Inline</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 flex justify-center">
            <x-input.calendar name="tanggal_lahir" value="YYYY/MM/DD" />
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Date Picker (Dropdown)</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 flex flex-col items-center gap-6">
            <x-input.date-picker name="tgl_acara" placeholder="Pilih tanggal acara" />
            <x-actions.button variant="primary" size="sm">Konfirmasi</x-actions.button>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Klik tombol untuk membuka kalender, pilih tanggal untuk otomatis
            menutup panel dan memperbarui teks tombol.
        </p>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-input.date-picker name="tgl_lahir" placeholder="Pilih tanggal lahir" /&gt;</code></pre>
        </div>

        <div role="alert" class="alert alert-info mt-4 text-sm">
            <span>
                Isi input <code>hidden</code> dengan format <code>YYYY-MM-DD</code>
                otomatis tersedia lewat prop <code>name</code> — cocok untuk
                submit form native (<code>$request-&gt;input('tgl_lahir')</code>)
                maupun dibaca lewat JS eksternal jika diperlukan.
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
                        <td rowspan="2"><code>&lt;x-input.calendar&gt;</code></td>
                        <td><code>value</code></td>
                        <td>Tanggal awal terpilih (YYYY-MM-DD)</td>
                    </tr>
                    <tr>
                        <td><code>name</code></td>
                        <td>Opsional — nama hidden input untuk submit form</td>
                    </tr>
                    <tr>
                        <td rowspan="3"><code>&lt;x-input.date-picker&gt;</code></td>
                        <td><code>value</code></td>
                        <td>Tanggal awal terpilih</td>
                    </tr>
                    <tr>
                        <td><code>name</code></td>
                        <td>Nama hidden input</td>
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
