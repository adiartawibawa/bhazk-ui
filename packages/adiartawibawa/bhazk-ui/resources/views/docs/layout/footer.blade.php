<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Layout</span>
        <h1 class="text-3xl font-bold">Footer</h1>
        <p class="text-base-content/70 mt-2">Bagian bawah halaman berisi tautan, hak cipta, dan info tambahan.</p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — dengan Newsletter</h2>
        <div class="border border-base-300 rounded-box overflow-hidden">
            <x-layout.footer class="sm:footer-horizontal bg-neutral text-neutral-content p-10">
                <x-layout.footer-nav title="Layanan">
                    <x-navigation.link href="#" class="link-hover">Branding</x-navigation.link>
                    <x-navigation.link href="#" class="link-hover">Desain</x-navigation.link>
                </x-layout.footer-nav>
                <x-layout.footer-nav title="Perusahaan">
                    <x-navigation.link href="#" class="link-hover">Tentang Kami</x-navigation.link>
                    <x-navigation.link href="#" class="link-hover">Kontak</x-navigation.link>
                </x-layout.footer-nav>
                <x-layout.footer-nav title="Newsletter">
                    <fieldset class="fieldset">
                        <label class="label">Berlangganan info terbaru</label>
                        <div class="join">
                            <x-input.input-field placeholder="[email protected]" class="join-item" />
                            <x-actions.button variant="primary" class="join-item">Kirim</x-actions.button>
                        </div>
                    </fieldset>
                </x-layout.footer-nav>
            </x-layout.footer>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Kolom newsletter menggabungkan <code>&lt;x-input.input-field&gt;</code>,
            <code>&lt;x-actions.button&gt;</code>, dan class <code>join-item</code>.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Vertikal (Default)</h2>
            <div class="border border-base-300 rounded-box overflow-hidden">
                <x-layout.footer class="bg-base-200 text-base-content p-10">
                    <x-layout.footer-nav title="Layanan">
                        <x-navigation.link href="#" class="link-hover">Branding</x-navigation.link>
                        <x-navigation.link href="#" class="link-hover">Desain</x-navigation.link>
                    </x-layout.footer-nav>
                </x-layout.footer>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Center — Bar Hak Cipta</h2>
            <div class="border border-base-300 rounded-box overflow-hidden">
                <x-layout.footer center class="bg-base-300 text-base-content p-4">
                    <aside>
                        <p>Copyright © {{ date('Y') }} Bhazk UI — Seluruh hak cipta dilindungi.</p>
                    </aside>
                </x-layout.footer>
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-layout.footer class="sm:footer-horizontal bg-neutral p-10"&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;x-layout.footer-nav title="Layanan"&gt;</code></pre>
            <pre data-prefix="3"><code>        &lt;x-navigation.link href="#" class="link-hover"&gt;Branding&lt;/x-navigation.link&gt;</code></pre>
            <pre data-prefix="4"><code>    &lt;/x-layout.footer-nav&gt;</code></pre>
            <pre data-prefix="5"><code>&lt;/x-layout.footer&gt;</code></pre>
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
                        <td rowspan="2"><code>&lt;x-layout.footer&gt;</code></td>
                        <td><code>direction</code></td>
                        <td>horizontal, vertical (default)</td>
                    </tr>
                    <tr>
                        <td><code>center</code></td>
                        <td>Konten rata tengah (untuk bar hak cipta)</td>
                    </tr>
                    <tr>
                        <td><code>&lt;x-layout.footer-nav&gt;</code></td>
                        <td><code>title</code></td>
                        <td>Opsional — judul kolom</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
