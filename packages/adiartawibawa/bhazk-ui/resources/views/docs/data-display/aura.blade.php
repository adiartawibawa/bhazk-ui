<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Data Display</span>
        <h1 class="text-3xl font-bold">Aura</h1>
        <p class="text-base-content/70 mt-2">
            Efek border cahaya animasi yang membungkus elemen apa pun — cocok
            untuk menyorot card, button, atau elemen paling penting di halaman.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Membungkus Card & Button</h2>
        <div class="border border-base-300 rounded-box p-12 flex flex-wrap items-center gap-10 bg-base-100">
            <x-data-display.aura style="rainbow">
                <x-data-display.card class="bg-base-100 w-64 shadow-sm" border>
                    <x-slot:title>Paket Premium</x-slot:title>
                    <p class="text-sm">Disorot dengan aura rainbow.</p>
                </x-data-display.card>
            </x-data-display.aura>

            <x-data-display.aura style="glow">
                <x-actions.button variant="primary" size="lg">Aksi Penting</x-actions.button>
            </x-data-display.aura>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Aura membungkus <code>&lt;x-data-display.card&gt;</code> dan
            <code>&lt;x-actions.button&gt;</code> tanpa mengubah komponen di dalamnya sama sekali.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Style</h2>
            <div class="flex flex-wrap items-center gap-8">
                @foreach (['dual', 'rainbow', 'holo', 'gold', 'silver', 'glow'] as $style)
                    <x-data-display.aura :style="$style">
                        <x-actions.button size="sm">{{ ucfirst($style) }}</x-actions.button>
                    </x-data-display.aura>
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Ukuran</h2>
            <div class="flex flex-wrap items-center gap-8">
                @foreach (['xs', 'sm', 'md', 'lg', 'xl'] as $size)
                    <x-data-display.aura style="rainbow" :size="$size">
                        <x-actions.button size="sm">{{ strtoupper($size) }}</x-actions.button>
                    </x-data-display.aura>
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Warna Custom & Durasi Animasi</h2>
            <div class="flex flex-wrap items-center gap-8">
                <x-data-display.aura class="text-orange-500">
                    <x-actions.button size="sm">Warna Custom</x-actions.button>
                </x-data-display.aura>
                <x-data-display.aura style="rainbow" class="duration-2000">
                    <x-actions.button size="sm">Durasi 2000ms</x-actions.button>
                </x-data-display.aura>
            </div>
            <p class="text-sm text-base-content/60 mt-2">
                Warna dan durasi murni lewat Tailwind utility (<code>text-*</code>,
                <code>duration-*</code>) di atribut <code>class</code> — bukan prop khusus.
            </p>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-data-display.aura style="rainbow"&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;x-actions.button variant="primary"&gt;Aksi Penting&lt;/x-actions.button&gt;</code></pre>
            <pre data-prefix="3"><code>&lt;/x-data-display.aura&gt;</code></pre>
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
                        <td><code>style</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>dual, rainbow, holo, gold, silver, glow</td>
                    </tr>
                    <tr>
                        <td><code>size</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>xs, sm, md (default), lg, xl</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
