<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Input</span>
        <h1 class="text-3xl font-bold">Textarea</h1>
        <p class="text-base-content/70 mt-2">
            Field teks multi-baris untuk deskripsi, komentar, atau catatan panjang.
        </p>
    </div>

    {{-- Live Preview --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Form Komentar dengan Button</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100">
            <div class="max-w-md space-y-3">
                <x-input.textarea placeholder="Tulis komentar Anda..." rows="4" class="w-full" />
                <div class="flex justify-end">
                    <x-actions.button variant="primary" size="sm">Kirim Komentar</x-actions.button>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Varian Warna</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 max-w-2xl">
                @foreach (['neutral', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error'] as $variant)
                    <x-input.textarea :variant="$variant" :placeholder="ucfirst($variant)" rows="2" />
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Ukuran</h2>
            <div class="flex flex-col gap-3 max-w-md">
                @foreach (['xs', 'sm', 'md', 'lg', 'xl'] as $size)
                    <x-input.textarea :size="$size" :placeholder="strtoupper($size)" rows="2" />
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Ghost Style</h2>
            <div class="max-w-md">
                <x-input.textarea ghost placeholder="Tanpa border, menyatu dengan latar" rows="3" />
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Validasi Native</h2>
            <div class="max-w-md">
                <x-input.textarea validator required minlength="20" placeholder="Tulis minimal 20 karakter..."
                    hint="Deskripsi harus minimal 20 karakter" rows="3" />
            </div>
            <p class="text-sm text-base-content/60 mt-2">
                Sama seperti Input Field — validasi warna & hint murni CSS native
                (<code>:user-invalid</code>), tanpa JavaScript.
            </p>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Disabled & Isi Awal (old value)</h2>
            <div class="max-w-md">
                <x-input.textarea disabled rows="3">Teks ini tidak bisa diedit.</x-input.textarea>
            </div>
            <p class="text-sm text-base-content/60 mt-2">
                Isi awal ditulis sebagai konten di antara tag pembuka/penutup
                komponen — kompatibel langsung dengan <code>{{ old('bio') }}</code>
                Laravel atau <code>wire:model</code> Livewire.
            </p>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-input.textarea</code></pre>
            <pre data-prefix="2"><code>    variant="primary"</code></pre>
            <pre data-prefix="3"><code>    rows="4"</code></pre>
            <pre data-prefix="4"><code>    placeholder="Tulis sesuatu..."</code></pre>
            <pre data-prefix="5"><code>    wire:model="bio"</code></pre>
            <pre data-prefix="6"><code>&gt;{{ old('bio') }}&lt;/x-input.textarea&gt;</code></pre>
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
                        <td><code>ghost</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>Style tanpa border/background solid</td>
                    </tr>
                    <tr>
                        <td><code>validator</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>Aktifkan validasi warna native</td>
                    </tr>
                    <tr>
                        <td><code>hint</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>Teks yang muncul otomatis saat tidak valid</td>
                    </tr>
                    <tr>
                        <td><code>rows</code></td>
                        <td>int|null</td>
                        <td>null</td>
                        <td>Jumlah baris terlihat</td>
                    </tr>
                    <tr>
                        <td><code>$slot</code></td>
                        <td>slot</td>
                        <td>—</td>
                        <td>Isi awal textarea (bukan prop <code>value</code>)</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
