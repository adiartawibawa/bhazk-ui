<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Data Display</span>
        <h1 class="text-3xl font-bold">Stat</h1>
        <p class="text-base-content/70 mt-2">
            Menampilkan angka/metrik penting dalam blok visual — cocok untuk dashboard.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — dengan Avatar & Button</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 overflow-x-auto">
            <x-data-display.stats class="shadow">
                <x-data-display.stat>
                    <x-slot:title>Downloads</x-slot:title>
                    <x-slot:value>31K</x-slot:value>
                    <x-slot:desc>Jan 1st - Feb 1st</x-slot:desc>
                </x-data-display.stat>

                <x-data-display.stat>
                    <x-slot:figure>
                        <x-data-display.avatar src="https://api.dicebear.com/9.x/avataaars/svg?seed={{ Str::random(8) }}"
                            size="w-16" />
                    </x-slot:figure>
                    <x-slot:title>Tasks Done</x-slot:title>
                    <x-slot:value>86%</x-slot:value>
                    <x-slot:desc>31 tugas tersisa</x-slot:desc>
                </x-data-display.stat>

                <x-data-display.stat>
                    <x-slot:title>Saldo Akun</x-slot:title>
                    <x-slot:value>$89,400</x-slot:value>
                    <x-slot:actions>
                        <x-actions.button variant="success" size="xs">Tambah Dana</x-actions.button>
                    </x-slot:actions>
                </x-data-display.stat>
            </x-data-display.stats>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Menggabungkan <code>&lt;x-data-display.avatar&gt;</code> di <code>figure</code>
            dan <code>&lt;x-actions.button&gt;</code> di <code>actions</code>.
        </p>
    </section>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Arah Vertikal</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100">
            <x-data-display.stats direction="vertical" class="shadow">
                <x-data-display.stat>
                    <x-slot:title>Total Views</x-slot:title>
                    <x-slot:value>89,400</x-slot:value>
                    <x-slot:desc>21% lebih tinggi dari bulan lalu</x-slot:desc>
                </x-data-display.stat>
                <x-data-display.stat>
                    <x-slot:title>New Users</x-slot:title>
                    <x-slot:value>4,200</x-slot:value>
                    <x-slot:desc>↗︎ 400 (22%)</x-slot:desc>
                </x-data-display.stat>
            </x-data-display.stats>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-data-display.stats class="shadow"&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;x-data-display.stat&gt;</code></pre>
            <pre data-prefix="3"><code>        &lt;x-slot:title&gt;Downloads&lt;/x-slot:title&gt;</code></pre>
            <pre data-prefix="4"><code>        &lt;x-slot:value&gt;31K&lt;/x-slot:value&gt;</code></pre>
            <pre data-prefix="5"><code>    &lt;/x-data-display.stat&gt;</code></pre>
            <pre data-prefix="6"><code>&lt;/x-data-display.stats&gt;</code></pre>
        </div>

        <div class="overflow-x-auto mt-6">
            <table class="table">
                <thead>
                    <tr>
                        <th>Komponen</th>
                        <th>Prop/Slot</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>&lt;x-data-display.stats&gt;</code></td>
                        <td><code>direction</code></td>
                        <td>horizontal (default), vertical</td>
                    </tr>
                    <tr>
                        <td rowspan="5"><code>&lt;x-data-display.stat&gt;</code></td>
                        <td><code>figure</code> (slot)</td>
                        <td>Opsional — icon/avatar</td>
                    </tr>
                    <tr>
                        <td><code>title</code> (slot)</td>
                        <td>Opsional — label metrik</td>
                    </tr>
                    <tr>
                        <td><code>value</code> (slot)</td>
                        <td>Opsional — angka utama</td>
                    </tr>
                    <tr>
                        <td><code>desc</code> (slot)</td>
                        <td>Opsional — keterangan tambahan</td>
                    </tr>
                    <tr>
                        <td><code>actions</code> (slot)</td>
                        <td>Opsional — tombol aksi</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
