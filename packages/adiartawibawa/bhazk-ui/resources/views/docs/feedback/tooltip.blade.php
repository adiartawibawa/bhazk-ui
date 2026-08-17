<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Feedback</span>
        <h1 class="text-3xl font-bold">Tooltip</h1>
        <p class="text-base-content/70 mt-2">Menampilkan label singkat saat elemen di-hover atau fokus.</p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — dengan Button</h2>
        <div class="border border-base-300 rounded-box p-16 flex justify-center gap-4 bg-base-100">
            <x-feedback.tooltip text="Salin ke clipboard">
                <x-actions.button variant="ghost" circle>📋</x-actions.button>
            </x-feedback.tooltip>

            <x-feedback.tooltip text="Hapus item ini" variant="error">
                <x-actions.button variant="error" style="outline" circle>🗑</x-actions.button>
            </x-feedback.tooltip>
        </div>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Posisi</h2>
            <div class="flex flex-wrap justify-center gap-8 p-10">
                <x-feedback.tooltip text="Atas" placement="top" open>
                    <x-actions.button variant="outline" size="sm">Top</x-actions.button>
                </x-feedback.tooltip>
                <x-feedback.tooltip text="Bawah" placement="bottom" open>
                    <x-actions.button variant="outline" size="sm">Bottom</x-actions.button>
                </x-feedback.tooltip>
                <x-feedback.tooltip text="Kiri" placement="left" open>
                    <x-actions.button variant="outline" size="sm">Left</x-actions.button>
                </x-feedback.tooltip>
                <x-feedback.tooltip text="Kanan" placement="right" open>
                    <x-actions.button variant="outline" size="sm">Right</x-actions.button>
                </x-feedback.tooltip>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Varian Warna</h2>
            <div class="flex flex-wrap gap-4 p-8">
                @foreach (['primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error'] as $variant)
                    <x-feedback.tooltip :text="ucfirst($variant)" :variant="$variant" open>
                        <x-actions.button size="sm">{{ ucfirst($variant) }}</x-actions.button>
                    </x-feedback.tooltip>
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Pada Badge & Teks</h2>
            <div class="flex items-center gap-4">
                <x-feedback.tooltip text="Status server aktif">
                    <x-data-display.badge variant="success">Online</x-data-display.badge>
                </x-feedback.tooltip>
                <x-feedback.tooltip text="Fitur ini masih dalam tahap beta">
                    <span class="underline decoration-dotted cursor-help">Fitur Beta</span>
                </x-feedback.tooltip>
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-feedback.tooltip text="Salin ke clipboard" placement="top"&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;x-actions.button variant="ghost" circle&gt;📋&lt;/x-actions.button&gt;</code></pre>
            <pre data-prefix="3"><code>&lt;/x-feedback.tooltip&gt;</code></pre>
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
                        <td><code>text</code></td>
                        <td>string</td>
                        <td>— (wajib)</td>
                        <td>Isi tooltip</td>
                    </tr>
                    <tr>
                        <td><code>placement</code></td>
                        <td>string|null</td>
                        <td>top</td>
                        <td>top, bottom, left, right</td>
                    </tr>
                    <tr>
                        <td><code>align</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>start, end</td>
                    </tr>
                    <tr>
                        <td><code>variant</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>primary, secondary, accent, info, success, warning, error</td>
                    </tr>
                    <tr>
                        <td><code>open</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>Paksa selalu terlihat (tanpa hover)</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
