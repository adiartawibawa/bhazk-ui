<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Data Display</span>
        <h1 class="text-3xl font-bold">Status</h1>
        <p class="text-base-content/70 mt-2">
            Ikon kecil untuk menunjukkan status suatu elemen — online, error, pending, dsb.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — dipasangkan dengan List & Avatar</h2>
        <div class="border border-base-300 rounded-box p-4 bg-base-100">
            <x-data-display.list class="bg-base-100 rounded-box">
                <x-data-display.list-row>
                    <x-data-display.avatar src="https://api.dicebear.com/9.x/avataaars/svg?seed={{ Str::random(8) }}"
                        size="size-10" />
                    <div>Budi Santoso</div>
                    <x-data-display.status variant="success" size="md" class="ml-auto" />
                </x-data-display.list-row>
                <x-data-display.list-row>
                    <x-data-display.avatar src="https://api.dicebear.com/9.x/avataaars/svg?seed={{ Str::random(8) }}"
                        size="size-10" />
                    <div>Ani Wijaya</div>
                    <x-data-display.status variant="error" size="md" class="ml-auto" />
                </x-data-display.list-row>
            </x-data-display.list>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Menggabungkan <code>&lt;x-data-display.status&gt;</code> di dalam
            <code>&lt;x-data-display.list-row&gt;</code> bersama <code>&lt;x-data-display.avatar&gt;</code>.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Varian Warna</h2>
            <div class="flex flex-wrap items-center gap-4">
                @foreach (['primary', 'secondary', 'accent', 'neutral', 'info', 'success', 'warning', 'error'] as $variant)
                    <div class="flex items-center gap-2">
                        <x-data-display.status :variant="$variant" />
                        <span class="text-sm">{{ ucfirst($variant) }}</span>
                    </div>
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Ukuran</h2>
            <div class="flex flex-wrap items-center gap-4">
                @foreach (['xs', 'sm', 'md', 'lg', 'xl'] as $size)
                    <x-data-display.status variant="success" :size="$size" />
                @endforeach
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-data-display.status variant="success" size="md" /&gt;</code></pre>
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
                        <td>primary, secondary, accent, neutral, info, success, warning, error</td>
                    </tr>
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
