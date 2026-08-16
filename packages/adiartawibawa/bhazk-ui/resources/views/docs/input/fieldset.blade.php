<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Input</span>
        <h1 class="text-3xl font-bold">Fieldset & Label</h1>
        <p class="text-base-content/70 mt-2">
            Mengelompokkan field form dengan judul (<code>fieldset</code>), dan
            teks label pendamping (<code>label</code>) — biasa (di bawah/atas
            field) atau melayang (<code>floating-label</code>, muncul saat field fokus).
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Form Lengkap</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100">
            <x-input.fieldset legend="Informasi Akun" description="Data ini bisa diubah kapan saja" class="max-w-sm">
                <x-input.input-field placeholder="Nama Lengkap" class="w-full mb-2" />
                <x-input.select placeholder="Pilih Kota" :options="['Jakarta', 'Bandung', 'Surabaya']" class="w-full mb-2" />
                <x-actions.button variant="primary" size="sm">Simpan</x-actions.button>
            </x-input.fieldset>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Menggabungkan <code>&lt;x-input.input-field&gt;</code>,
            <code>&lt;x-input.select&gt;</code>, dan <code>&lt;x-actions.button&gt;</code>
            di dalam satu <code>&lt;x-input.fieldset&gt;</code>.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Floating Label</h2>
            <x-input.label floating class="w-full max-w-xs">
                <span>Email</span>
                <input type="email" placeholder="[email protected]" class="input w-full" />
            </x-input.label>
            <p class="text-sm text-base-content/60 mt-2">
                Klik field untuk melihat label "Email" melayang ke atas.
            </p>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Label sebagai Deskripsi</h2>
            <x-input.fieldset legend="Username" class="max-w-xs">
                <x-input.input-field placeholder="username" class="w-full" />
                <x-input.label>Harus unik, minimal 4 karakter</x-input.label>
            </x-input.fieldset>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-input.fieldset legend="Profil" description="Opsional"&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;x-input.input-field placeholder="Nama" /&gt;</code></pre>
            <pre data-prefix="3"><code>&lt;/x-input.fieldset&gt;</code></pre>
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
                        <td rowspan="2"><code>&lt;x-input.fieldset&gt;</code></td>
                        <td><code>legend</code></td>
                        <td>Judul fieldset</td>
                    </tr>
                    <tr>
                        <td><code>description</code></td>
                        <td>Teks kecil di bawah field</td>
                    </tr>
                    <tr>
                        <td><code>&lt;x-input.label&gt;</code></td>
                        <td><code>floating</code></td>
                        <td>true = label melayang, wajib slot berisi teks + field sekaligus</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
