@php
    // Ikon checkmark bulat — dipakai berulang di seluruh contoh, sama seperti resmi DaisyUI
    $checkIcon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
    </svg>';
@endphp

<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Data Display</span>
        <h1 class="text-3xl font-bold">Timeline</h1>
        <p class="text-base-content/70 mt-2">
            Menampilkan daftar peristiwa secara kronologis. Contoh berikut
            mengikuti struktur variasi resmi dari dokumentasi DaisyUI.
        </p>
    </div>

    {{-- 1. Text di kedua sisi + ikon (horizontal, default) --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Text di Kedua Sisi + Ikon</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 overflow-x-auto">
            <x-data-display.timeline>
                <x-data-display.timeline-item first box>
                    <x-slot:start><time class="font-mono italic">1984</time></x-slot:start>
                    <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                    <x-slot:end>First Macintosh computer</x-slot:end>
                </x-data-display.timeline-item>

                <x-data-display.timeline-item box>
                    <x-slot:start><time class="font-mono italic">1998</time></x-slot:start>
                    <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                    <x-slot:end>iMac</x-slot:end>
                </x-data-display.timeline-item>

                <x-data-display.timeline-item box>
                    <x-slot:start><time class="font-mono italic">2001</time></x-slot:start>
                    <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                    <x-slot:end>iPod</x-slot:end>
                </x-data-display.timeline-item>

                <x-data-display.timeline-item box>
                    <x-slot:start><time class="font-mono italic">2007</time></x-slot:start>
                    <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                    <x-slot:end>iPhone</x-slot:end>
                </x-data-display.timeline-item>

                <x-data-display.timeline-item last box>
                    <x-slot:start><time class="font-mono italic">2015</time></x-slot:start>
                    <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                    <x-slot:end>Apple Watch</x-slot:end>
                </x-data-display.timeline-item>
            </x-data-display.timeline>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Prop <code>box</code> menerapkan gaya kotak (<code>timeline-box</code>)
            ke konten <code>start</code>/<code>end</code>.
        </p>
    </section>

    {{-- 2 & 3. Bottom-only / Top-only --}}
    <section class="mb-12 grid md:grid-cols-2 gap-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Satu Sisi Bawah</h2>
            <div class="border border-base-300 rounded-box p-8 bg-base-100 overflow-x-auto">
                <x-data-display.timeline>
                    <x-data-display.timeline-item first box>
                        <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                        <x-slot:end>First Macintosh</x-slot:end>
                    </x-data-display.timeline-item>
                    <x-data-display.timeline-item box>
                        <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                        <x-slot:end>iMac</x-slot:end>
                    </x-data-display.timeline-item>
                    <x-data-display.timeline-item last box>
                        <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                        <x-slot:end>iPhone</x-slot:end>
                    </x-data-display.timeline-item>
                </x-data-display.timeline>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Satu Sisi Atas</h2>
            <div class="border border-base-300 rounded-box p-8 bg-base-100 overflow-x-auto">
                <x-data-display.timeline>
                    <x-data-display.timeline-item first box>
                        <x-slot:start>First Macintosh</x-slot:start>
                        <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                    </x-data-display.timeline-item>
                    <x-data-display.timeline-item box>
                        <x-slot:start>iMac</x-slot:start>
                        <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                    </x-data-display.timeline-item>
                    <x-data-display.timeline-item last box>
                        <x-slot:start>iPhone</x-slot:start>
                        <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                    </x-data-display.timeline-item>
                </x-data-display.timeline>
            </div>
        </div>
    </section>

    {{-- 4. Sisi berbeda-beda (tidak selalu bergantian) --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Sisi Berbeda-beda (Custom Pattern)</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 overflow-x-auto">
            <x-data-display.timeline>
                <x-data-display.timeline-item first box>
                    <x-slot:start>First Macintosh</x-slot:start>
                    <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                </x-data-display.timeline-item>
                <x-data-display.timeline-item box>
                    <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                    <x-slot:end>iMac</x-slot:end>
                </x-data-display.timeline-item>
                <x-data-display.timeline-item box>
                    <x-slot:start>iPod</x-slot:start>
                    <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                </x-data-display.timeline-item>
                <x-data-display.timeline-item last box>
                    <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                    <x-slot:end>iPhone</x-slot:end>
                </x-data-display.timeline-item>
            </x-data-display.timeline>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Tiap item bebas diisi <code>start</code> saja, <code>end</code> saja,
            atau keduanya — tidak wajib bergantian rapi.
        </p>
    </section>

    {{-- 5. Garis berwarna --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Garis Berwarna</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 overflow-x-auto">
            <x-data-display.timeline>
                <x-data-display.timeline-item first box line-color="primary">
                    <x-slot:start>First Macintosh</x-slot:start>
                    <x-slot:middle><span class="text-primary">{!! $checkIcon !!}</span></x-slot:middle>
                </x-data-display.timeline-item>
                <x-data-display.timeline-item box line-color="primary">
                    <x-slot:middle><span class="text-primary">{!! $checkIcon !!}</span></x-slot:middle>
                    <x-slot:end>iMac</x-slot:end>
                </x-data-display.timeline-item>
                <x-data-display.timeline-item box>
                    <x-slot:start>iPod</x-slot:start>
                    <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                </x-data-display.timeline-item>
                <x-data-display.timeline-item last box>
                    <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                    <x-slot:end>iPhone</x-slot:end>
                </x-data-display.timeline-item>
            </x-data-display.timeline>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            <code>lineColor</code> hanya diterapkan pada item pertama & kedua —
            garis sisanya kembali ke warna default, persis pola resmi DaisyUI.
        </p>
    </section>

    {{-- 6. Tanpa ikon --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Tanpa Ikon</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 overflow-x-auto">
            <x-data-display.timeline>
                <x-data-display.timeline-item first box>
                    <x-slot:start>First Macintosh</x-slot:start>
                </x-data-display.timeline-item>
                <x-data-display.timeline-item box>
                    <x-slot:end>iMac</x-slot:end>
                </x-data-display.timeline-item>
                <x-data-display.timeline-item box>
                    <x-slot:start>iPod</x-slot:start>
                </x-data-display.timeline-item>
                <x-data-display.timeline-item last box>
                    <x-slot:end>iPhone</x-slot:end>
                </x-data-display.timeline-item>
            </x-data-display.timeline>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Cukup jangan isi slot <code>middle</code> — garis penghubung tetap muncul otomatis.
        </p>
    </section>

    {{-- 7, 8, 9. Vertikal: kedua sisi / kanan saja / kiri saja --}}
    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Vertikal — Kedua Sisi + Ikon</h2>
            <div class="border border-base-300 rounded-box p-8 bg-base-100">
                <x-data-display.timeline direction="vertical">
                    <x-data-display.timeline-item first box>
                        <x-slot:start><time class="font-mono italic">1984</time></x-slot:start>
                        <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                        <x-slot:end>First Macintosh computer</x-slot:end>
                    </x-data-display.timeline-item>
                    <x-data-display.timeline-item box>
                        <x-slot:start><time class="font-mono italic">1998</time></x-slot:start>
                        <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                        <x-slot:end>iMac</x-slot:end>
                    </x-data-display.timeline-item>
                    <x-data-display.timeline-item last box>
                        <x-slot:start><time class="font-mono italic">2001</time></x-slot:start>
                        <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                        <x-slot:end>iPod</x-slot:end>
                    </x-data-display.timeline-item>
                </x-data-display.timeline>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <div>
                <h2 class="text-xl font-semibold mb-3">Vertikal — Kanan Saja</h2>
                <div class="border border-base-300 rounded-box p-8 bg-base-100">
                    <x-data-display.timeline direction="vertical">
                        <x-data-display.timeline-item first box>
                            <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                            <x-slot:end>First Macintosh</x-slot:end>
                        </x-data-display.timeline-item>
                        <x-data-display.timeline-item box>
                            <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                            <x-slot:end>iMac</x-slot:end>
                        </x-data-display.timeline-item>
                        <x-data-display.timeline-item last box>
                            <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                            <x-slot:end>iPod</x-slot:end>
                        </x-data-display.timeline-item>
                    </x-data-display.timeline>
                </div>
            </div>

            <div>
                <h2 class="text-xl font-semibold mb-3">Vertikal — Kiri Saja</h2>
                <div class="border border-base-300 rounded-box p-8 bg-base-100">
                    <x-data-display.timeline direction="vertical">
                        <x-data-display.timeline-item first box>
                            <x-slot:start>First Macintosh</x-slot:start>
                            <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                        </x-data-display.timeline-item>
                        <x-data-display.timeline-item box>
                            <x-slot:start>iMac</x-slot:start>
                            <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                        </x-data-display.timeline-item>
                        <x-data-display.timeline-item last box>
                            <x-slot:start>iPod</x-slot:start>
                            <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                        </x-data-display.timeline-item>
                    </x-data-display.timeline>
                </div>
            </div>
        </div>
    </section>

    {{-- 10. Snap icon dengan deskripsi panjang --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Ikon Snap ke Start (dengan Deskripsi)</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100">
            <x-data-display.timeline snap-icon direction="vertical" class="max-md:timeline-compact">
                <x-data-display.timeline-item first start-class="mb-10 md:text-end">
                    <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                    <x-slot:start>
                        <time class="font-mono italic">1984</time>
                        <div class="text-lg font-black">First Macintosh computer</div>
                        Komputer pribadi pertama Apple dengan antarmuka grafis, berperan
                        penting membangun fondasi desktop publishing.
                    </x-slot:start>
                </x-data-display.timeline-item>

                <x-data-display.timeline-item end-class="md:mb-10">
                    <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                    <x-slot:end>
                        <time class="font-mono italic">1998</time>
                        <div class="text-lg font-black">iMac</div>
                        Keluarga komputer all-in-one yang jadi andalan lini konsumen Apple sejak 1998.
                    </x-slot:end>
                </x-data-display.timeline-item>

                <x-data-display.timeline-item last start-class="md:text-end">
                    <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                    <x-slot:start>
                        <time class="font-mono italic">2015</time>
                        <div class="text-lg font-black">Apple Watch</div>
                        Jam tangan pintar dengan fitur kesehatan dan integrasi ekosistem Apple.
                    </x-slot:start>
                </x-data-display.timeline-item>
            </x-data-display.timeline>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Prop <code>startClass</code>/<code>endClass</code> dipakai untuk spacing
            khusus (<code>mb-10 md:text-end</code>) yang cuma relevan pada mode ini —
            konsisten dengan pola resmi DaisyUI.
        </p>
    </section>

    {{-- 11. Responsive --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Responsive — Vertikal di Mobile, Horizontal di Desktop</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 overflow-x-auto">
            <x-data-display.timeline direction="vertical" class="lg:timeline-horizontal">
                <x-data-display.timeline-item first box>
                    <x-slot:start><time class="font-mono italic">1984</time></x-slot:start>
                    <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                    <x-slot:end>First Macintosh</x-slot:end>
                </x-data-display.timeline-item>
                <x-data-display.timeline-item box>
                    <x-slot:start><time class="font-mono italic">1998</time></x-slot:start>
                    <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                    <x-slot:end>iMac</x-slot:end>
                </x-data-display.timeline-item>
                <x-data-display.timeline-item last box>
                    <x-slot:start><time class="font-mono italic">2001</time></x-slot:start>
                    <x-slot:middle>{!! $checkIcon !!}</x-slot:middle>
                    <x-slot:end>iPod</x-slot:end>
                </x-data-display.timeline-item>
            </x-data-display.timeline>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Perkecil lebar browser untuk melihat tata letak berubah dari vertikal ke horizontal.
        </p>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-data-display.timeline&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;x-data-display.timeline-item first box&gt;</code></pre>
            <pre data-prefix="3"><code>        &lt;x-slot:start&gt;1984&lt;/x-slot:start&gt;</code></pre>
            <pre data-prefix="4"><code>        &lt;x-slot:middle&gt;●&lt;/x-slot:middle&gt;</code></pre>
            <pre data-prefix="5"><code>        &lt;x-slot:end&gt;First Macintosh&lt;/x-slot:end&gt;</code></pre>
            <pre data-prefix="6"><code>    &lt;/x-data-display.timeline-item&gt;</code></pre>
            <pre data-prefix="7"><code>&lt;/x-data-display.timeline&gt;</code></pre>
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
                        <td rowspan="2"><code>&lt;x-data-display.timeline&gt;</code></td>
                        <td><code>direction</code></td>
                        <td>horizontal (default), vertical</td>
                    </tr>
                    <tr>
                        <td><code>compact</code></td>
                        <td>Paksa semua item ke satu sisi</td>
                    </tr>
                    <tr>
                        <td rowspan="6"><code>&lt;x-data-display.timeline-item&gt;</code></td>
                        <td><code>first</code> / <code>last</code></td>
                        <td>Hilangkan garis di ujung yang sesuai</td>
                    </tr>
                    <tr>
                        <td><code>box</code></td>
                        <td>Terapkan gaya kotak ke start/end</td>
                    </tr>
                    <tr>
                        <td><code>lineColor</code></td>
                        <td>Warna garis penghubung</td>
                    </tr>
                    <tr>
                        <td><code>startClass</code> / <code>endClass</code></td>
                        <td>Class tambahan (mis. spacing snap-icon)</td>
                    </tr>
                    <tr>
                        <td><code>start</code>/<code>middle</code>/<code>end</code> (slot)</td>
                        <td>Konten kiri/tengah/kanan — semua opsional</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
