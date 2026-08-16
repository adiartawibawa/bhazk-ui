<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Input</span>
        <h1 class="text-3xl font-bold">Input Field</h1>
        <p class="text-base-content/70 mt-2">
            Field teks dasar untuk form. Mendukung leading icon, validasi
            native browser dengan hint otomatis, dan seluruh atribut HTML
            native (placeholder, required, pattern, dll).
        </p>
    </div>

    {{-- Live Preview --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Search Bar dengan Button</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100">
            <div class="flex gap-2 max-w-md">
                <x-input.input-field type="search" placeholder="Cari komponen..." class="grow">
                    <x-slot:icon>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8" />
                            <path stroke-linecap="round" d="m21 21-4.3-4.3" />
                        </svg>
                    </x-slot:icon>
                </x-input.input-field>
                <x-actions.button variant="primary">Cari</x-actions.button>
            </div>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Ikon dikirim lewat <code>&lt;x-slot:icon&gt;</code> (bisa juga string
            atribut biasa), digabung dengan <code>&lt;x-actions.button&gt;</code>
            sebagai tombol aksi di sampingnya.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Varian Warna</h2>
            <div class="flex flex-col gap-3 max-w-xs">
                @foreach (['neutral', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error'] as $variant)
                    <x-input.input-field :variant="$variant" :placeholder="ucfirst($variant)" />
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Ukuran</h2>
            <div class="flex flex-col gap-3 max-w-xs">
                @foreach (['xs', 'sm', 'md', 'lg', 'xl'] as $size)
                    <x-input.input-field :size="$size" :placeholder="strtoupper($size)" />
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Validasi Native (Email)</h2>
            <div class="max-w-xs">
                <x-input.input-field type="email" validator required placeholder="[email protected]"
                    hint="Masukkan alamat email yang valid" />
            </div>
            <p class="text-sm text-base-content/60 mt-2">
                Coba ketik email tidak valid lalu klik di luar field — warna
                berubah merah dan hint muncul otomatis, murni CSS native
                (<code>:user-invalid</code>), tanpa JavaScript.
            </p>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Validasi Angka dengan Rentang</h2>
            <div class="max-w-xs">
                <x-input.input-field type="number" validator required min="1" max="10"
                    placeholder="Angka 1-10" hint="Harus di antara 1 dan 10" />
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Disabled</h2>
            <div class="max-w-xs">
                <x-input.input-field placeholder="Tidak bisa diedit" disabled />
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Dengan Datalist</h2>
            <div class="max-w-xs">
                <x-input.input-field placeholder="Pilih browser" list="browsers" />
                <datalist id="browsers">
                    <option value="Chrome"></option>
                    <option value="Firefox"></option>
                    <option value="Safari"></option>
                </datalist>
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-input.input-field</code></pre>
            <pre data-prefix="2"><code>    type="email"</code></pre>
            <pre data-prefix="3"><code>    variant="primary"</code></pre>
            <pre data-prefix="4"><code>    validator</code></pre>
            <pre data-prefix="5"><code>    required</code></pre>
            <pre data-prefix="6"><code>    placeholder="[email protected]"</code></pre>
            <pre data-prefix="7"><code>    hint="Masukkan email yang valid"</code></pre>
            <pre data-prefix="8"><code>    wire:model="email"</code></pre>
            <pre data-prefix="9"><code>/&gt;</code></pre>
        </div>

        <div role="alert" class="alert alert-info mt-4 text-sm">
            <span>
                Seluruh atribut HTML native (<code>placeholder</code>,
                <code>required</code>, <code>pattern</code>, <code>min</code>,
                <code>max</code>, <code>name</code>, <code>wire:model</code>, dst)
                diteruskan otomatis ke elemen <code>&lt;input&gt;</code> — baik
                dengan maupun tanpa <code>icon</code>.
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
                        <td><code>variant</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>neutral, primary, secondary, accent, info, success, warning, error</td>
                    </tr>
                    <tr>
                        <td><code>size</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>xs, sm, md, lg, xl</td>
                    </tr>
                    <tr>
                        <td><code>icon</code></td>
                        <td>string|slot</td>
                        <td>null</td>
                        <td>Leading icon — otomatis membungkus dalam &lt;label class="input"&gt;</td>
                    </tr>
                    <tr>
                        <td><code>validator</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>Aktifkan validasi warna native (butuh atribut HTML validasi seperti required/pattern)</td>
                    </tr>
                    <tr>
                        <td><code>hint</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>Teks yang muncul otomatis saat input tidak valid</td>
                    </tr>
                    <tr>
                        <td><code>type</code></td>
                        <td>string</td>
                        <td>text</td>
                        <td>Tipe input HTML native</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
