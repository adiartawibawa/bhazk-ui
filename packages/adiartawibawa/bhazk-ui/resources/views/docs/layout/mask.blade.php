<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Layout</span>
        <h1 class="text-3xl font-bold">Mask</h1>
        <p class="text-base-content/70 mt-2">Memotong konten (biasanya gambar) menjadi bentuk geometris.</p>
    </div>

    <div role="alert" class="alert alert-info mb-10 text-sm">
        <span>Mask hanya memotong tampilan visual — area hover/spacing elemen tetap persegi. Selalu set
            <code>w-*</code>/<code>h-*</code> eksplisit.</span>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Avatar Squircle</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 flex justify-center">
            <x-layout.mask shape="squircle" src="https://randomuser.me/api/portraits/men/{{ rand(1, 99) }}.jpg"
                alt="Avatar" class="w-24 h-24" />
        </div>
    </section>

    {{-- Seluruh 14 bentuk resmi, ukuran w-40 h-40 sesuai contoh resmi DaisyUI --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Seluruh Bentuk (14 Total)</h2>
        <div class="flex flex-wrap gap-6">
            @foreach (['squircle', 'heart', 'hexagon', 'hexagon-2', 'decagon', 'pentagon', 'diamond', 'square', 'circle', 'star', 'star-2', 'triangle', 'triangle-2', 'triangle-3', 'triangle-4'] as $shape)
                <div class="flex flex-col items-center gap-2">
                    <x-layout.mask :shape="$shape"
                        src="https://img.daisyui.com/images/stock/photo-1567653418876-5bb0e566e1c2.webp"
                        :alt="$shape" class="w-40 h-40" />
                    <span class="text-xs text-base-content/60">{{ $shape }}</span>
                </div>
            @endforeach
        </div>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Half Mask (Dua Warna)</h2>
            <div class="flex">
                <x-layout.mask shape="star-2" :half="1" class="bg-primary w-10 h-10" />
                <x-layout.mask shape="star-2" :half="2" class="bg-base-300 w-10 h-10" />
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Non-Gambar (Warna Polos)</h2>
            <x-layout.mask shape="hexagon" class="bg-accent w-16 h-16" />
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-layout.mask shape="squircle" src="/foto.jpg" class="w-40 h-40" /&gt;</code></pre>
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
                        <td><code>shape</code></td>
                        <td>string</td>
                        <td>squircle</td>
                        <td>squircle, heart, hexagon, hexagon-2, decagon, pentagon, diamond, square, circle, star,
                            star-2, triangle, triangle-2, triangle-3, triangle-4</td>
                    </tr>
                    <tr>
                        <td><code>half</code></td>
                        <td>int|null</td>
                        <td>null</td>
                        <td>1 atau 2 — efek dua warna berdampingan</td>
                    </tr>
                    <tr>
                        <td><code>src</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>Jika diisi, render &lt;img&gt;; jika tidak, bungkus $slot</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
