<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Data Display</span>
        <h1 class="text-3xl font-bold">Kbd</h1>
        <p class="text-base-content/70 mt-2">
            Menampilkan tombol keyboard, biasa dipakai untuk shortcut atau instruksi.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 flex flex-wrap items-center gap-6">
            <p>Tekan <x-data-display.kbd size="sm">F</x-data-display.kbd> untuk memberi penghormatan.</p>

            <div class="flex items-center gap-1">
                <x-data-display.kbd>⌘</x-data-display.kbd>
                <x-data-display.kbd>⌥</x-data-display.kbd>
                <x-data-display.kbd>⇧</x-data-display.kbd>
            </div>
        </div>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Ukuran</h2>
            <div class="flex flex-wrap items-center gap-3">
                @foreach (['xs', 'sm', 'md', 'lg', 'xl'] as $size)
                    <x-data-display.kbd :size="$size">{{ strtoupper($size) }}</x-data-display.kbd>
                @endforeach
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>Tekan &lt;x-data-display.kbd size="sm"&gt;Esc&lt;/x-data-display.kbd&gt; untuk membatalkan.</code></pre>
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
                        <td><code>size</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>xs, sm, md, lg, xl</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
