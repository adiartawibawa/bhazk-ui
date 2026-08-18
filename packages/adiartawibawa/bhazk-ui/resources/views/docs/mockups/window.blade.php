<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Mockups</span>
        <h1 class="text-3xl font-bold">Window</h1>
        <p class="text-base-content/70 mt-2">Membungkus konten dalam tampilan jendela sistem operasi.</p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Tabel Data</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100">
            <x-mockups.window class="w-full">
                <div class="p-4">
                    <x-data-display.table zebra>
                        <x-slot:head>
                            <tr>
                                <th>Nama</th>
                                <th>Status</th>
                            </tr>
                        </x-slot:head>
                        <tr>
                            <td>Budi</td>
                            <td><x-data-display.badge variant="success" size="sm">Aktif</x-data-display.badge></td>
                        </tr>
                        <tr>
                            <td>Ani</td>
                            <td><x-data-display.badge variant="warning" size="sm">Pending</x-data-display.badge>
                            </td>
                        </tr>
                    </x-data-display.table>
                </div>
            </x-mockups.window>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Menggabungkan <code>&lt;x-data-display.table&gt;</code> dan
            <code>&lt;x-data-display.badge&gt;</code> di dalam bingkai jendela.
        </p>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <x-mockups.code class="w-full">
            <x-mockups.code-line prefix="1">&lt;x-mockups.window&gt;</x-mockups.code-line>
            <x-mockups.code-line prefix="2">&nbsp;&nbsp;&nbsp;&nbsp;Konten di sini.</x-mockups.code-line>
            <x-mockups.code-line prefix="3">&lt;/x-mockups.window&gt;</x-mockups.code-line>
        </x-mockups.code>
    </section>
</x-layouts.docs>
