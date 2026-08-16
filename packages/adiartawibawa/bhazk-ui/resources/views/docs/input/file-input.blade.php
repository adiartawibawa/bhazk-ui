<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Input</span>
        <h1 class="text-3xl font-bold">File Input</h1>
        <p class="text-base-content/70 mt-2">
            Dua varian tersedia: <strong>File Input</strong> ringan (native,
            styling DaisyUI murni) dan <strong>File Uploader</strong> lengkap
            (FilePond + Alpine, dengan drag-drop, preview gambar, dan validasi).
        </p>
    </div>

    {{-- Native --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">File Input — Native</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100">
            <x-input.file-input />
        </div>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Dengan Fieldset & Label</h2>
            <fieldset class="fieldset max-w-xs">
                <legend class="fieldset-legend">Unggah Dokumen</legend>
                <x-input.file-input />
                <label class="label">Maksimal 2MB</label>
            </fieldset>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Varian Warna</h2>
            <div class="flex flex-col gap-3 max-w-xs">
                @foreach (['neutral', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error'] as $variant)
                    <x-input.file-input :variant="$variant" />
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Ukuran</h2>
            <div class="flex flex-col gap-3 max-w-xs">
                @foreach (['xs', 'sm', 'md', 'lg', 'xl'] as $size)
                    <x-input.file-input :size="$size" />
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Ghost & Disabled</h2>
            <div class="flex flex-col gap-3 max-w-xs">
                <x-input.file-input ghost />
                <x-input.file-input disabled />
            </div>
        </div>
    </section>

    <hr class="my-12" />

    {{-- FilePond --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">File Uploader — dengan FilePond</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 flex flex-col items-center gap-4">
            <div class="w-full max-w-md">
                <x-input.file-uploader name="dokumen" :accepted-file-types="['image/png', 'image/jpeg', 'application/pdf']" max-file-size="3MB" />
            </div>
            <x-actions.button variant="primary" size="sm">Unggah</x-actions.button>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Coba seret gambar ke area drop — preview thumbnail muncul otomatis.
            Coba upload file di luar tipe/ukuran yang diizinkan untuk melihat validasi.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div class="flex flex-col items-center gap-4 bg-base-100 border border-base-300 p-8 rounded-box">
            <h2 class="text-xl font-semibold mb-3">Multi File</h2>
            <div class="w-full max-w-md">
                <x-input.file-uploader name="galeri" multiple :max-files="5" label-idle="Unggah hingga 5 gambar" />
            </div>
        </div>

        <div class="flex flex-col items-center gap-4 bg-base-100 border border-base-300 p-8 rounded-box">
            <h2 class="text-xl font-semibold mb-3">Tanpa Preview Gambar</h2>
            <div class="w-full max-w-md">
                <x-input.file-uploader name="lampiran" :allow-image-preview="false" label-idle="Unggah lampiran" />
            </div>
        </div>

        <div class="flex flex-col items-center gap-4 bg-base-100 border border-base-300 p-8 rounded-box">
            <h2 class="text-xl font-semibold mb-3">Disabled</h2>
            <div class="w-full max-w-md">
                <x-input.file-uploader name="terkunci" disabled label-idle="Tidak dapat diunggah" />
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>

        <p class="font-semibold mb-2">File Input (Native)</p>
        <div class="mockup-code mb-6">
            <pre data-prefix="1"><code>&lt;x-input.file-input variant="primary" /&gt;</code></pre>
        </div>

        <p class="font-semibold mb-2">File Uploader (FilePond)</p>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-input.file-uploader</code></pre>
            <pre data-prefix="2"><code>    name="dokumen"</code></pre>
            <pre data-prefix="3"><code>    :accepted-file-types="['image/png', 'image/jpeg']"</code></pre>
            <pre data-prefix="4"><code>    max-file-size="3MB"</code></pre>
            <pre data-prefix="5"><code>/&gt;</code></pre>
        </div>

        <div role="alert" class="alert alert-warning mt-4 text-sm">
            <span>
                <code>&lt;x-input.file-uploader&gt;</code> butuh package npm
                <code>filepond</code> (+ plugin terkait) ter-install dan ter-import
                di <code>resources/js/app.js</code>. Tampilannya membawa CSS
                bawaan FilePond sendiri, sehingga secara visual tidak 100%
                menyatu dengan tema DaisyUI seperti komponen lain di package ini.
                Untuk upload sungguhan ke server, isi prop <code>server</code>
                mengikuti
                <a href="https://pqina.nl/filepond/docs/api/server/" target="_blank" class="link link-primary">protokol
                    server resmi FilePond</a>.
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
                        <td rowspan="3"><code>&lt;x-input.file-input&gt;</code></td>
                        <td><code>variant</code></td>
                        <td>neutral, primary, secondary, accent, info, success, warning, error</td>
                    </tr>
                    <tr>
                        <td><code>size</code></td>
                        <td>xs, sm, md, lg, xl</td>
                    </tr>
                    <tr>
                        <td><code>ghost</code></td>
                        <td>Tanpa border</td>
                    </tr>
                    <tr>
                        <td rowspan="8"><code>&lt;x-input.file-uploader&gt;</code></td>
                        <td><code>name</code></td>
                        <td>Nama field untuk submit form</td>
                    </tr>
                    <tr>
                        <td><code>multiple</code></td>
                        <td>Izinkan lebih dari satu file</td>
                    </tr>
                    <tr>
                        <td><code>acceptedFileTypes</code></td>
                        <td>Array MIME type yang diizinkan</td>
                    </tr>
                    <tr>
                        <td><code>maxFileSize</code></td>
                        <td>Batas ukuran, mis. "3MB"</td>
                    </tr>
                    <tr>
                        <td><code>maxFiles</code></td>
                        <td>Batas jumlah file (mode multiple)</td>
                    </tr>
                    <tr>
                        <td><code>labelIdle</code></td>
                        <td>Teks area drop (mendukung HTML)</td>
                    </tr>
                    <tr>
                        <td><code>allowImagePreview</code></td>
                        <td>Tampilkan thumbnail gambar</td>
                    </tr>
                    <tr>
                        <td><code>server</code></td>
                        <td>Konfigurasi endpoint upload sungguhan</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
