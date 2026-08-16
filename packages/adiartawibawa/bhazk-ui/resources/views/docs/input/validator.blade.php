<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Input</span>
        <h1 class="text-3xl font-bold">Validator</h1>
        <p class="text-base-content/70 mt-2">
            Bukan komponen visual tersendiri — <code>validator</code> adalah
            modifier yang mengubah warna field otomatis (hijau/merah) berdasarkan
            validasi native browser (<code>required</code>, <code>pattern</code>,
            <code>min</code>, <code>max</code>, dst), murni CSS lewat pseudo-class
            <code>:user-valid</code>/<code>:user-invalid</code>.
        </p>
    </div>

    <div role="alert" class="alert alert-info mb-10 text-sm">
        <span>
            Prop <code>validator</code> dan <code>hint</code> sudah tersedia di
            <code>&lt;x-input.input-field&gt;</code>, <code>&lt;x-input.textarea&gt;</code>,
            <code>&lt;x-input.checkbox&gt;</code>, dan <code>&lt;x-input.toggle&gt;</code>.
            Halaman ini merangkum pemakaiannya lintas komponen.
        </span>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Form Registrasi</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100">
            <div class="flex flex-col gap-4 max-w-sm">
                <x-input.input-field type="email" validator required placeholder="[email protected]"
                    hint="Masukkan email yang valid" />
                <x-input.input-field type="password" validator required minlength="8" placeholder="Kata sandi"
                    hint="Minimal 8 karakter" />
                <x-input.checkbox validator required label="Saya setuju dengan Syarat & Ketentuan"
                    hint="Wajib disetujui untuk lanjut" />
                <x-actions.button variant="primary">Daftar</x-actions.button>
            </div>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Coba isi form ini lalu klik "Daftar" tanpa mengisi semuanya —
            field yang belum valid otomatis berwarna merah dengan hint di bawahnya.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Pada Select</h2>
            <x-input.select validator required placeholder="Pilih negara" :options="['Indonesia', 'Malaysia', 'Singapura']" class="validator" />
            <p class="text-sm text-base-content/60 mt-2">
                Select belum punya prop <code>validator</code> bawaan — tambahkan
                class <code>validator</code> manual seperti contoh ini untuk sementara.
            </p>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Field Manual (Non-Komponen)</h2>
            <input type="url" required placeholder="https://" class="input validator" />
            <x-input.validator-hint>Masukkan URL yang valid</x-input.validator-hint>
            <p class="text-sm text-base-content/60 mt-2">
                Untuk markup native manual, cukup tempel
                <code>&lt;x-input.validator-hint&gt;</code> setelah elemen ber-class
                <code>validator</code>.
            </p>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-input.input-field</code></pre>
            <pre data-prefix="2"><code>    type="email"</code></pre>
            <pre data-prefix="3"><code>    validator</code></pre>
            <pre data-prefix="4"><code>    required</code></pre>
            <pre data-prefix="5"><code>    hint="Masukkan email yang valid"</code></pre>
            <pre data-prefix="6"><code>/&gt;</code></pre>
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
                        <td>input-field, textarea, checkbox, toggle</td>
                        <td><code>validator</code> (bool)</td>
                        <td>Aktifkan warna validasi native</td>
                    </tr>
                    <tr>
                        <td>input-field, textarea, checkbox, toggle</td>
                        <td><code>hint</code> (string)</td>
                        <td>Teks yang muncul saat tidak valid</td>
                    </tr>
                    <tr>
                        <td><code>&lt;x-input.validator-hint&gt;</code></td>
                        <td>—</td>
                        <td>Untuk field manual di luar komponen kita</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
