<x-layouts.docs>
    {{-- Header --}}
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Actions</span>
        <h1 class="text-3xl font-bold">Modal</h1>
        <p class="text-base-content/70 mt-2">
            Dialog overlay berbasis elemen native <code>&lt;dialog&gt;</code>.
            Focus-trap, scroll-lock body, dan layering ditangani otomatis oleh
            browser — tidak butuh JS tambahan untuk mekanisme dasarnya.
        </p>
    </div>

    {{-- Live Interactive Preview --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview</h2>
        <div class="border border-base-300 rounded-box p-8 flex flex-wrap items-center gap-3 bg-base-100">
            <x-actions.button variant="primary" onclick="document.getElementById('demo-modal').showModal()">
                Buka Modal
            </x-actions.button>
        </div>

        <x-actions.modal id="demo-modal">
            <x-slot:header>Konfirmasi Aksi</x-slot:header>

            <p class="text-base-content/70">
                Ini adalah contoh modal standar. Bisa ditutup lewat tombol ✕,
                klik di luar area (backdrop), atau tekan <kbd class="kbd kbd-sm">Esc</kbd>.
            </p>

            <x-slot:footer>
                <form method="dialog">
                    <x-actions.button variant="ghost">Batal</x-actions.button>
                </form>
                <x-actions.button variant="primary">Konfirmasi</x-actions.button>
            </x-slot:footer>
        </x-actions.modal>
    </section>

    {{-- Variasi Showcase --}}
    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Ukuran</h2>
            <div class="flex flex-wrap gap-3">
                @foreach (['sm', 'md', 'lg', 'xl', 'full'] as $size)
                    <x-actions.button variant="outline" size="sm"
                        onclick="document.getElementById('modal-size-{{ $size }}').showModal()">
                        {{ strtoupper($size) }}
                    </x-actions.button>

                    <x-actions.modal :id="'modal-size-' . $size" :size="$size">
                        <x-slot:header>Modal Ukuran {{ strtoupper($size) }}</x-slot:header>
                        <p class="text-base-content/70">Contoh konten untuk ukuran <code>{{ $size }}</code>.</p>
                    </x-actions.modal>
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Posisi</h2>
            <div class="flex flex-wrap gap-3">
                @foreach (['top', 'middle', 'bottom'] as $position)
                    <x-actions.button variant="outline" size="sm"
                        onclick="document.getElementById('modal-pos-{{ $position }}').showModal()">
                        {{ ucfirst($position) }}
                    </x-actions.button>

                    <x-actions.modal :id="'modal-pos-' . $position" :position="$position">
                        <x-slot:header>Posisi {{ ucfirst($position) }}</x-slot:header>
                        <p class="text-base-content/70">Modal muncul dari sisi {{ $position }} layar.</p>
                    </x-actions.modal>
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Persistent (Tidak Bisa Ditutup Sembarangan)</h2>
            <div class="flex flex-wrap gap-3">
                <x-actions.button variant="error" size="sm"
                    onclick="document.getElementById('modal-persistent').showModal()">
                    Buka Modal Persistent
                </x-actions.button>

                <x-actions.modal id="modal-persistent" persistent>
                    <x-slot:header>Aksi Wajib Diselesaikan</x-slot:header>
                    <p class="text-base-content/70">
                        Modal ini tidak bisa ditutup lewat klik backdrop atau tombol Esc —
                        cocok untuk konfirmasi kritikal (mis. proses pembayaran berjalan).
                        Harus ditutup lewat tombol eksplisit di bawah.
                    </p>
                    <x-slot:footer>
                        <x-actions.button variant="primary"
                            onclick="document.getElementById('modal-persistent').close()">
                            Saya Mengerti
                        </x-actions.button>
                    </x-slot:footer>
                </x-actions.modal>
            </div>
        </div>
    </section>

    {{-- Code Usage Guide --}}
    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>

        <div class="mockup-code relative pt-10">
            <div class="absolute top-3 left-4 flex items-center gap-2 z-10">
                <span class="size-3 rounded-full bg-red-500 shadow-sm"></span>
                <span class="size-3 rounded-full bg-yellow-500 shadow-sm"></span>
                <span class="size-3 rounded-full bg-green-500 shadow-sm"></span>
            </div>

            <pre data-prefix="1"><code>&lt;x-actions.button onclick="document.getElementById('my-modal').showModal()"&gt;</code></pre>
            <pre data-prefix="2"><code>    Buka Modal</code></pre>
            <pre data-prefix="3"><code>&lt;/x-actions.button&gt;</code></pre>
            <pre data-prefix="4"><code></code></pre>
            <pre data-prefix="5"><code>&lt;x-actions.modal id="my-modal" size="md"&gt;</code></pre>
            <pre data-prefix="6"><code>    &lt;x-slot:header&gt;Judul&lt;/x-slot:header&gt;</code></pre>
            <pre data-prefix="7"><code>    Isi konten modal di sini.</code></pre>
            <pre data-prefix="8"><code>&lt;/x-actions.modal&gt;</code></pre>
        </div>

        <div role="alert" class="alert alert-info mt-4 text-sm">
            <span>
                Untuk membuka modal dari Livewire (server-driven), dispatch event
                dengan nama <code>open-modal</code> beserta payload <code>id</code>:
                <code>$this->dispatch('open-modal', id: 'my-modal')</code>.
                Komponen sudah otomatis mendengarkan event ini via <code>x-on:open-modal.window</code>.
            </span>
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
                        <td><code>id</code></td>
                        <td>string|null</td>
                        <td>auto (uniqid)</td>
                        <td>Wajib diisi manual jika ingin dibuka via trigger eksternal atau event Livewire</td>
                    </tr>
                    <tr>
                        <td><code>size</code></td>
                        <td>string</td>
                        <td>md</td>
                        <td>sm, md, lg, xl, full</td>
                    </tr>
                    <tr>
                        <td><code>position</code></td>
                        <td>string</td>
                        <td>middle</td>
                        <td>top, middle, bottom</td>
                    </tr>
                    <tr>
                        <td><code>persistent</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>Blokir tutup via backdrop click & Esc, sembunyikan tombol ✕</td>
                    </tr>
                    <tr>
                        <td><code>header</code> <span class="text-base-content/50">(slot)</span></td>
                        <td>slot</td>
                        <td>—</td>
                        <td>Opsional — judul modal beserta tombol close otomatis</td>
                    </tr>
                    <tr>
                        <td><code>$slot</code> <span class="text-base-content/50">(default)</span></td>
                        <td>slot</td>
                        <td>—</td>
                        <td>Isi konten modal</td>
                    </tr>
                    <tr>
                        <td><code>footer</code> <span class="text-base-content/50">(slot)</span></td>
                        <td>slot</td>
                        <td>—</td>
                        <td>Opsional — area tombol aksi di bagian bawah</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
