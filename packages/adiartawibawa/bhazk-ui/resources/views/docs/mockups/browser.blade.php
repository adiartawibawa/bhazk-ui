<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Mockups</span>
        <h1 class="text-3xl font-bold">Browser</h1>
        <p class="text-base-content/70 mt-2">Membungkus konten dalam tampilan jendela browser.</p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Halaman Login</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100">
            <x-mockups.browser url="https://app.bhazk-ui.test/login" class="w-full">
                <div class="grid place-content-center p-10">
                    <x-data-display.card class="w-72 bg-base-200" border>
                        <x-slot:title>Masuk</x-slot:title>
                        <x-input.input-field placeholder="Email" class="w-full mb-2" />
                        <x-input.input-field type="password" placeholder="Kata sandi" class="w-full mb-3" />
                        <x-actions.button variant="primary" class="w-full">Masuk</x-actions.button>
                    </x-data-display.card>
                </div>
            </x-mockups.browser>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Menggabungkan <code>&lt;x-data-display.card&gt;</code>,
            <code>&lt;x-input.input-field&gt;</code>, dan <code>&lt;x-actions.button&gt;</code>
            di dalam bingkai browser.
        </p>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <x-mockups.code class="w-full">
            <x-mockups.code-line prefix="1">&lt;x-mockups.browser
                url="https://example.com"&gt;</x-mockups.code-line>
            <x-mockups.code-line prefix="2">&nbsp;&nbsp;&nbsp;&nbsp;Konten halaman di sini.</x-mockups.code-line>
            <x-mockups.code-line prefix="3">&lt;/x-mockups.browser&gt;</x-mockups.code-line>
        </x-mockups.code>

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
                        <td><code>url</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>Teks di address bar</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
