<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Layout</span>
        <h1 class="text-3xl font-bold">Join</h1>
        <p class="text-base-content/70 mt-2">
            Mengelompokkan beberapa elemen (input, select, button) dengan
            border radius yang menyatu. Komponen
            <a href="{{ route('docs.navigation.pagination') }}" class="link link-primary">Pagination</a>
            sebelumnya sebenarnya dibangun di atas mekanisme ini.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Search Bar</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100">
            <x-layout.join>
                <x-input.input-field placeholder="Cari film..." class="join-item" />
                <x-input.select class="join-item" placeholder="Filter" :options="['Sci-fi', 'Drama', 'Action']" />
                <x-actions.button variant="primary" class="join-item">Cari</x-actions.button>
            </x-layout.join>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Menggabungkan <code>&lt;x-input.input-field&gt;</code>,
            <code>&lt;x-input.select&gt;</code>, dan <code>&lt;x-actions.button&gt;</code> —
            masing-masing cukup diberi <code>class="join-item"</code>.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Vertikal</h2>
            <x-layout.join direction="vertical">
                <x-actions.button class="join-item">Atas</x-actions.button>
                <x-actions.button class="join-item">Tengah</x-actions.button>
                <x-actions.button class="join-item">Bawah</x-actions.button>
            </x-layout.join>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Responsive</h2>
            <x-layout.join class="join-vertical lg:join-horizontal">
                <x-actions.button class="join-item">Satu</x-actions.button>
                <x-actions.button class="join-item">Dua</x-actions.button>
                <x-actions.button class="join-item">Tiga</x-actions.button>
            </x-layout.join>
            <p class="text-sm text-base-content/60 mt-2">Perkecil lebar browser untuk melihat perubahan arah.</p>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-layout.join&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;x-input.input-field class="join-item" placeholder="Email" /&gt;</code></pre>
            <pre data-prefix="3"><code>    &lt;x-actions.button class="join-item" variant="primary"&gt;Subscribe&lt;/x-actions.button&gt;</code></pre>
            <pre data-prefix="4"><code>&lt;/x-layout.join&gt;</code></pre>
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
                        <td><code>direction</code></td>
                        <td>string|null</td>
                        <td>horizontal</td>
                        <td>horizontal (default), vertical</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
