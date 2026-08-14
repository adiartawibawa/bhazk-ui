<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Navigation</span>
        <h1 class="text-3xl font-bold">Link</h1>
        <p class="text-base-content/70 mt-2">
            Tautan teks bergaris bawah — Tailwind mereset style link secara default,
            komponen ini mengembalikannya dengan opsi warna dan hover.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100">
            <p>
                Baca lebih lanjut di
                <x-navigation.link href="#" color="primary">dokumentasi kami</x-navigation.link>
                atau hubungi
                <x-navigation.link href="#" color="secondary" hover>tim support</x-navigation.link>.
            </p>
        </div>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Varian Warna</h2>
            <div class="flex flex-wrap gap-6">
                @foreach (['primary', 'secondary', 'accent', 'neutral', 'success', 'info', 'warning', 'error'] as $color)
                    <x-navigation.link href="#" :color="$color">{{ ucfirst($color) }}</x-navigation.link>
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Garis Bawah hanya saat Hover</h2>
            <div class="flex flex-wrap gap-6">
                <x-navigation.link href="#" color="primary" hover>Arahkan mouse ke sini</x-navigation.link>
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-navigation.link href="/tentang" color="primary" hover&gt;</code></pre>
            <pre data-prefix="2"><code>    Pelajari lebih lanjut</code></pre>
            <pre data-prefix="3"><code>&lt;/x-navigation.link&gt;</code></pre>
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
                        <td><code>href</code></td>
                        <td>string</td>
                        <td>#</td>
                        <td>URL tujuan</td>
                    </tr>
                    <tr>
                        <td><code>color</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>primary, secondary, accent, neutral, success, info, warning, error</td>
                    </tr>
                    <tr>
                        <td><code>hover</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>Garis bawah hanya tampil saat hover</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
