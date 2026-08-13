<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Data Display</span>
        <h1 class="text-3xl font-bold">Countdown</h1>
        <p class="text-base-content/70 mt-2">
            Menampilkan angka 0–999 dengan efek transisi geser bawaan DaisyUI.
            Komponen ini murni presentational — logic timer/hitung mundur
            sepenuhnya ditentukan oleh consumer lewat Alpine.
        </p>
    </div>

    {{-- Live Preview — Reaktif, hitung mundur sungguhan ke tanggal target --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 flex flex-col items-center gap-6"
            x-data="{
                target: new Date('2027-01-01 00:00:00').getTime(),
                days: 0,
                hours: 0,
                minutes: 0,
                seconds: 0,
                tick() {
                    const distance = this.target - Date.now();
                    if (distance < 0) { this.days = this.hours = this.minutes = this.seconds = 0; return; }
                    this.days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    this.hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    this.minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    this.seconds = Math.floor((distance % (1000 * 60)) / 1000);
                }
            }" x-init="tick();
            setInterval(() => tick(), 1000)">
            <div class="grid grid-flow-col gap-5 text-center auto-cols-max">
                <div class="flex flex-col p-2 bg-neutral text-neutral-content rounded-box">
                    <x-data-display.countdown bind="days" class="font-mono text-5xl" />
                    Hari
                </div>
                <div class="flex flex-col p-2 bg-neutral text-neutral-content rounded-box">
                    <x-data-display.countdown bind="hours" class="font-mono text-5xl" />
                    Jam
                </div>
                <div class="flex flex-col p-2 bg-neutral text-neutral-content rounded-box">
                    <x-data-display.countdown bind="minutes" class="font-mono text-5xl" />
                    Menit
                </div>
                <div class="flex flex-col p-2 bg-neutral text-neutral-content rounded-box">
                    <x-data-display.countdown bind="seconds" class="font-mono text-5xl" />
                    Detik
                </div>
            </div>

            <x-actions.button variant="primary">Ingatkan Saya</x-actions.button>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Berjalan otomatis menuju 1 Januari 2027 — angka berkurang setiap
            detik dengan animasi geser bawaan DaisyUI, tanpa refresh halaman.
        </p>
    </section>

    {{-- Cara kerja: pola dasar reaktif --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Pola Dasar — Satu Angka Reaktif</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 flex items-center justify-center"
            x-data="{ counter: 10 }" x-init="setInterval(() => { if (counter > 0) counter--; }, 1000)">
            <x-data-display.countdown bind="counter" class="font-mono text-6xl" />
        </div>
        <div class="mockup-code mt-4">
            <pre data-prefix="1"><code>&lt;div x-data="{ counter: 10 }"</code></pre>
            <pre data-prefix="2"><code>     x-init="setInterval(() => { if (counter & gt; 0) counter--; }, 1000)"&gt;</code></pre>
            <pre data-prefix="3"><code>    &lt;x-data-display.countdown bind="counter" class="font-mono text-6xl" /&gt;</code></pre>
            <pre data-prefix="4"><code>&lt;/div&gt;</code></pre>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            <code>bind="counter"</code> menghubungkan komponen ke variabel Alpine
            <code>counter</code> yang didefinisikan di elemen pembungkus — komponen
            sendiri tidak tahu apa pun soal logic pengurangannya. Ini pola paling
            dasar; contoh "Live Preview" di atas cuma pengulangan pola ini 4 kali
            untuk hari/jam/menit/detik sekaligus.
        </p>
    </section>

    {{-- Nilai statis, untuk perbandingan --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Nilai Statis (Tanpa Alpine)</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 flex items-center gap-2">
            <p>Tekan <x-data-display.countdown value="15" class="font-mono text-2xl" /> untuk memberi penghormatan.
            </p>
        </div>
        <div class="mockup-code mt-4">
            <pre data-prefix="1"><code>&lt;x-data-display.countdown value="15" class="font-mono text-2xl" /&gt;</code></pre>
        </div>
        <div role="alert" class="alert alert-warning mt-4 text-sm">
            <span>
                Tanpa <code>bind</code>, nilai bersifat statis dan tidak akan pernah
                berubah sendiri — cocok untuk angka tetap (mis. skor akhir), bukan
                untuk hitung mundur berjalan.
            </span>
        </div>
    </section>

    {{-- Ukuran & warna custom --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Ukuran & Warna Custom</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 flex flex-wrap items-center gap-6">
            <x-data-display.countdown value="42" class="font-mono text-2xl" />
            <x-data-display.countdown value="42" class="font-mono text-4xl text-primary" />
            <x-data-display.countdown value="42" class="font-mono text-6xl text-secondary" />
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Ukuran dan warna murni ditentukan lewat utility Tailwind biasa
            (<code>text-*</code>) di atribut <code>class</code> — tidak ada prop
            khusus untuk ini, konsisten dengan filosofi DaisyUI: "component class
            + Tailwind utility", bukan menambah API baru.
        </p>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Referensi Prop</h2>
        <div class="overflow-x-auto mt-2">
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
                        <td><code>value</code></td>
                        <td>int</td>
                        <td>0</td>
                        <td>Nilai statis 0–999, dipakai jika <code>bind</code> kosong</td>
                    </tr>
                    <tr>
                        <td><code>bind</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>Nama variabel Alpine reaktif di scope <code>x-data</code> terdekat</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div role="alert" class="alert alert-info mt-4 text-sm">
            <span>
                Komponen ini tidak punya prop <code>target</code>/timer bawaan —
                logic waktu selalu didefinisikan di level consumer lewat
                <code>x-data</code>, seperti dicontohkan di "Live Preview" dan
                "Pola Dasar" di atas.
            </span>
        </div>
    </section>
</x-layouts.docs>
