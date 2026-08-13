<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Data Display</span>
        <h1 class="text-3xl font-bold">Table</h1>
        <p class="text-base-content/70 mt-2">
            Menampilkan data tabular. Otomatis dibungkus <code>overflow-x-auto</code>
            supaya tetap bisa di-scroll horizontal di layar sempit.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — dengan Aksi Button & Badge</h2>
        <div class="border border-base-300 rounded-box p-4 bg-base-100">
            <x-data-display.table zebra>
                <x-slot:head>
                    <tr>
                        <th></th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </x-slot:head>

                <tr>
                    <th>1</th>
                    <td>Cy Ganderton</td>
                    <td>Quality Control Specialist</td>
                    <td><x-data-display.badge variant="success" size="sm">Aktif</x-data-display.badge></td>
                    <td>
                        <x-actions.button size="sm" variant="ghost">Edit</x-actions.button>
                        <x-actions.button size="sm" variant="error" style="outline">Hapus</x-actions.button>
                    </td>
                </tr>
                <tr>
                    <th>2</th>
                    <td>Hart Hagerty</td>
                    <td>Desktop Support Technician</td>
                    <td><x-data-display.badge variant="warning" size="sm">Cuti</x-data-display.badge></td>
                    <td>
                        <x-actions.button size="sm" variant="ghost">Edit</x-actions.button>
                        <x-actions.button size="sm" variant="error" style="outline">Hapus</x-actions.button>
                    </td>
                </tr>
                <tr>
                    <th>3</th>
                    <td>Brice Swyre</td>
                    <td>Tax Accountant</td>
                    <td><x-data-display.badge variant="error" size="sm">Nonaktif</x-data-display.badge></td>
                    <td>
                        <x-actions.button size="sm" variant="ghost">Edit</x-actions.button>
                        <x-actions.button size="sm" variant="error" style="outline">Hapus</x-actions.button>
                    </td>
                </tr>
            </x-data-display.table>
        </div>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Ukuran</h2>
            <div class="border border-base-300 rounded-box p-4 bg-base-100">
                <x-data-display.table size="sm" zebra>
                    <x-slot:head>
                        <tr>
                            <th>Nama</th>
                            <th>Kota</th>
                        </tr>
                    </x-slot:head>
                    <tr>
                        <td>Adi</td>
                        <td>Denpasar</td>
                    </tr>
                    <tr>
                        <td>Wibawa</td>
                        <td>Bandung</td>
                    </tr>
                </x-data-display.table>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Pin Rows & Cols</h2>
            <div class="border border-base-300 rounded-box p-4 bg-base-100 h-64 overflow-auto">
                <x-data-display.table pin-rows pin-cols zebra>
                    <x-slot:head>
                        <tr>
                            <th></th>
                            <th>Nama</th>
                            <th>Kota</th>
                            <th>Status</th>
                        </tr>
                    </x-slot:head>
                    @for ($i = 1; $i <= 10; $i++)
                        <tr>
                            <th>{{ $i }}</th>
                            <td>Pengguna {{ $i }}</td>
                            <td>Kota {{ $i }}</td>
                            <td><x-data-display.badge variant="success" size="sm">Aktif</x-data-display.badge></td>
                        </tr>
                    @endfor
                </x-data-display.table>
            </div>
            <p class="text-sm text-base-content/60 mt-2">
                Scroll area di atas — baris header dan kolom pertama tetap terlihat.
            </p>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-data-display.table zebra&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;x-slot:head&gt;</code></pre>
            <pre data-prefix="3"><code>        &lt;tr&gt;&lt;th&gt;Nama&lt;/th&gt;&lt;th&gt;Status&lt;/th&gt;&lt;/tr&gt;</code></pre>
            <pre data-prefix="4"><code>    &lt;/x-slot:head&gt;</code></pre>
            <pre data-prefix="5"><code></code></pre>
            <pre data-prefix="6"><code>    &lt;tr&gt;&lt;td&gt;Budi&lt;/td&gt;&lt;td&gt;Aktif&lt;/td&gt;&lt;/tr&gt;</code></pre>
            <pre data-prefix="7"><code>&lt;/x-data-display.table&gt;</code></pre>
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
                        <td><code>zebra</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>Garis-garis alternating pada baris</td>
                    </tr>
                    <tr>
                        <td><code>pinRows</code> / <code>pinCols</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>Header/kolom pertama tetap terlihat saat scroll</td>
                    </tr>
                    <tr>
                        <td><code>size</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>xs, sm, md, lg, xl</td>
                    </tr>
                    <tr>
                        <td><code>head</code> <span class="text-base-content/50">(slot)</span></td>
                        <td>slot</td>
                        <td>—</td>
                        <td>Opsional — baris <code>&lt;tr&gt;&lt;th&gt;</code> header</td>
                    </tr>
                    <tr>
                        <td><code>$slot</code> <span class="text-base-content/50">(default)</span></td>
                        <td>slot</td>
                        <td>—</td>
                        <td>Baris-baris <code>&lt;tr&gt;</code> data</td>
                    </tr>
                    <tr>
                        <td><code>foot</code> <span class="text-base-content/50">(slot)</span></td>
                        <td>slot</td>
                        <td>—</td>
                        <td>Opsional — baris footer</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
