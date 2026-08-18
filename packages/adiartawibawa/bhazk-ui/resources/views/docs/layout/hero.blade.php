<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Layout</span>
        <h1 class="text-3xl font-bold">Hero</h1>
        <p class="text-base-content/70 mt-2">Bagian besar untuk judul, deskripsi, dan CTA — biasa di bagian atas landing
            page.</p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — dengan Gambar & Button</h2>
        <div class="border border-base-300 rounded-box overflow-hidden">
            <x-layout.hero background-image="https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp"
                overlay class="min-h-72">
                <div class="max-w-md text-center text-neutral-content">
                    <h1 class="mb-5 text-4xl font-bold">Halo, Selamat Datang</h1>
                    <p class="mb-5">Bangun antarmuka Laravel yang indah lebih cepat dengan Bhazk UI.</p>
                    <x-actions.button variant="primary">Mulai Sekarang</x-actions.button>
                </div>
            </x-layout.hero>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            <code>overlay</code> menambahkan lapisan gelap semi-transparan supaya
            teks tetap kontras di atas gambar.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Tanpa Gambar</h2>
            <div class="border border-base-300 rounded-box overflow-hidden">
                <x-layout.hero class="bg-base-200 min-h-64">
                    <div class="max-w-md text-center">
                        <h1 class="text-4xl font-bold">Hero Sederhana</h1>
                        <p class="py-4">Cukup warna latar polos, tanpa gambar.</p>
                        <x-actions.button variant="primary">Get Started</x-actions.button>
                    </div>
                </x-layout.hero>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Dua Kolom — Gambar & Form</h2>
            <div class="border border-base-300 rounded-box overflow-hidden">
                <x-layout.hero class="bg-base-200 min-h-72">
                    <div class="flex flex-col lg:flex-row items-center gap-6">
                        <img src="https://img.daisyui.com/images/stock/photo-1560717789-0ac7c58ac90a.webp"
                            class="max-w-xs rounded-box shadow-2xl" alt="Hero" />
                        <div>
                            <h1 class="text-3xl font-bold">Daftar Sekarang!</h1>
                            <p class="py-4 max-w-sm">Dapatkan akses penuh ke seluruh fitur.</p>
                            <fieldset class="fieldset">
                                <x-input.input-field type="email" placeholder="[email protected]" class="w-full" />
                                <x-actions.button variant="primary" class="mt-2">Daftar</x-actions.button>
                            </fieldset>
                        </div>
                    </div>
                </x-layout.hero>
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-layout.hero background-image="/img/hero.jpg" overlay class="min-h-screen"&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;div class="max-w-md text-center text-neutral-content"&gt;</code></pre>
            <pre data-prefix="3"><code>        &lt;h1 class="text-5xl font-bold"&gt;Judul&lt;/h1&gt;</code></pre>
            <pre data-prefix="4"><code>    &lt;/div&gt;</code></pre>
            <pre data-prefix="5"><code>&lt;/x-layout.hero&gt;</code></pre>
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
                        <td><code>backgroundImage</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>URL gambar latar</td>
                    </tr>
                    <tr>
                        <td><code>overlay</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>Lapisan gelap untuk kontras teks</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
