<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Data Display</span>
        <h1 class="text-3xl font-bold">Hover Gallery</h1>
        <p class="text-base-content/70 mt-2">
            Kontainer gambar yang menampilkan gambar berbeda saat kolom
            horizontalnya di-hover — cocok untuk kartu produk e-commerce.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — dalam Card + Button + Badge</h2>
        <div class="border border-base-300 rounded-box p-8 flex justify-center bg-base-100">
            <x-data-display.card class="bg-base-200 max-w-60 shadow" size="sm">
                <x-slot:figure>
                    <x-data-display.hover-gallery>
                        <img alt="Topi 1" src="https://img.daisyui.com/images/stock/daisyui-hat-1.webp" />
                        <img alt="Topi 2" src="https://img.daisyui.com/images/stock/daisyui-hat-2.webp" />
                        <img alt="Topi 3" src="https://img.daisyui.com/images/stock/daisyui-hat-3.webp" />
                        <img alt="Topi 4" src="https://img.daisyui.com/images/stock/daisyui-hat-4.webp" />
                    </x-data-display.hover-gallery>
                </x-slot:figure>

                <x-slot:title>
                    Topi Bhazk
                    <span class="font-normal text-sm ml-auto">$25</span>
                </x-slot:title>
                <p class="text-sm">Topi klasik berkualitas tinggi dengan bordir logo.</p>

                <x-slot:actions>
                    <x-actions.button variant="primary" size="sm" block>Beli</x-actions.button>
                </x-slot:actions>
            </x-data-display.card>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Arahkan mouse ke berbagai posisi horizontal gambar untuk melihat 4 varian topi bergantian.
            Menggabungkan <code>&lt;x-data-display.card&gt;</code> dan <code>&lt;x-actions.button&gt;</code>.
        </p>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-data-display.hover-gallery class="max-w-60"&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;img src="produk-1.jpg" alt="..." /&gt;</code></pre>
            <pre data-prefix="3"><code>    &lt;img src="produk-2.jpg" alt="..." /&gt;</code></pre>
            <pre data-prefix="4"><code>    &lt;img src="produk-3.jpg" alt="..." /&gt;</code></pre>
            <pre data-prefix="5"><code>&lt;/x-data-display.hover-gallery&gt;</code></pre>
        </div>

        <div role="alert" class="alert alert-warning mt-4 text-sm">
            <span>
                Maksimal 10 gambar, dan semua gambar sebaiknya berdimensi sama agar
                transisi antar gambar tidak "melompat".
            </span>
        </div>
    </section>
</x-layouts.docs>
