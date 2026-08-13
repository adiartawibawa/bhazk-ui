<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Data Display</span>
        <h1 class="text-3xl font-bold">Carousel</h1>
        <p class="text-base-content/70 mt-2">
            Menampilkan gambar/konten dalam area scroll-snap. Murni CSS —
            navigasi memakai anchor link native, tanpa JavaScript.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — dengan Button sebagai Navigasi</h2>
        <div class="border border-base-300 rounded-box p-4 bg-base-100">
            <x-data-display.carousel class="w-full rounded-box">
                <x-data-display.carousel-item id="slide1" class="w-full">
                    <img class="w-full" alt="Slide 1"
                        src="https://img.daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.webp" />
                </x-data-display.carousel-item>
                <x-data-display.carousel-item id="slide2" class="w-full">
                    <img class="w-full" alt="Slide 2"
                        src="https://img.daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.webp" />
                </x-data-display.carousel-item>
                <x-data-display.carousel-item id="slide3" class="w-full">
                    <img class="w-full" alt="Slide 3"
                        src="https://img.daisyui.com/images/stock/photo-1414694762283-acccc27bca85.webp" />
                </x-data-display.carousel-item>
            </x-data-display.carousel>

            <div class="flex justify-center gap-2 py-3">
                <x-actions.button href="#slide1" size="xs" circle>1</x-actions.button>
                <x-actions.button href="#slide2" size="xs" circle>2</x-actions.button>
                <x-actions.button href="#slide3" size="xs" circle>3</x-actions.button>
            </div>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Tombol navigasi memakai <code>&lt;x-actions.button href="#slideN"&gt;</code> —
            komponen button yang sama otomatis dirender sebagai <code>&lt;a&gt;</code>
            karena prop <code>href</code> diisi, tanpa perlu komponen navigasi terpisah.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Snap Center</h2>
            <div class="border border-base-300 rounded-box p-4 bg-base-100">
                <x-data-display.carousel snap="center" class="rounded-box max-w-full space-x-4">
                    <x-data-display.carousel-item>
                        <img class="rounded-box"
                            src="https://img.daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.webp"
                            alt="1" />
                    </x-data-display.carousel-item>
                    <x-data-display.carousel-item>
                        <img class="rounded-box"
                            src="https://img.daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.webp"
                            alt="2" />
                    </x-data-display.carousel-item>
                    <x-data-display.carousel-item>
                        <img class="rounded-box"
                            src="https://img.daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.webp"
                            alt="3" />
                    </x-data-display.carousel-item>
                </x-data-display.carousel>
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-data-display.carousel class="w-full rounded-box"&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;x-data-display.carousel-item id="slide1" class="w-full"&gt;</code></pre>
            <pre data-prefix="3"><code>        &lt;img src="..." class="w-full" /&gt;</code></pre>
            <pre data-prefix="4"><code>    &lt;/x-data-display.carousel-item&gt;</code></pre>
            <pre data-prefix="5"><code>&lt;/x-data-display.carousel&gt;</code></pre>
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
                        <td rowspan="2"><code>&lt;x-data-display.carousel&gt;</code></td>
                        <td><code>snap</code></td>
                        <td>start (default), center, end</td>
                    </tr>
                    <tr>
                        <td><code>direction</code></td>
                        <td>horizontal (default), vertical</td>
                    </tr>
                    <tr>
                        <td><code>&lt;x-data-display.carousel-item&gt;</code></td>
                        <td><code>id</code></td>
                        <td>Wajib jika dinavigasi lewat anchor link</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
