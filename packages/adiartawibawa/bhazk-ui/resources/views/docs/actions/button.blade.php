<x-layouts.docs>
    {{-- Header --}}
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Actions</span>
        <h1 class="text-3xl font-bold">Button</h1>
        <p class="text-base-content/70 mt-2">
            Elemen aksi utama. Mendukung varian warna, modifier style DaisyUI 5
            (outline/soft/dash/glass), ukuran, bentuk, state loading client-side
            maupun server-driven (Livewire), dan bisa dirender sebagai
            <code>&lt;button&gt;</code> maupun <code>&lt;a&gt;</code>.
        </p>
    </div>

    {{-- Live Interactive Preview --}}
    <section x-data="{ isLoading: false }" class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview</h2>
        <div class="border border-base-300 rounded-box p-8 flex flex-wrap items-center gap-3 bg-base-100">
            <x-actions.button variant="primary" x-on:click="isLoading = !isLoading" x-bind:disabled="isLoading">
                <span x-show="!isLoading">Klik untuk loading</span>
                <span x-show="isLoading" x-cloak>Memuat...</span>
            </x-actions.button>

            <x-actions.button variant="outline" href="#">Sebagai Link (a)</x-actions.button>
            <x-actions.button variant="error" disabled>Disabled Button</x-actions.button>
            <x-actions.button variant="primary" href="#" disabled>Disabled Link</x-actions.button>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Perhatikan "Disabled Link" tetap tampil pudar (bukan sekadar non-klik) —
            karena <code>&lt;a&gt;</code> tidak punya pseudo-class <code>:disabled</code>
            native, komponen menambahkan class <code>btn-disabled</code> secara eksplisit.
        </p>
    </section>

    {{-- Variasi Showcase --}}
    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Varian Warna</h2>
            <div class="flex flex-wrap gap-3">
                @foreach (['primary', 'secondary', 'accent', 'neutral', 'info', 'success', 'warning', 'error', 'ghost', 'link'] as $variant)
                    <x-actions.button :variant="$variant">{{ ucfirst($variant) }}</x-actions.button>
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Modifier Style (DaisyUI 5)</h2>
            <div class="flex flex-wrap gap-3">
                <x-actions.button variant="primary" outline>Outline</x-actions.button>
                <x-actions.button variant="primary" soft>Soft</x-actions.button>
                <x-actions.button variant="primary" dash>Dash</x-actions.button>
                <x-actions.button variant="primary" glass>Glass</x-actions.button>
                <x-actions.button variant="primary" active>Active</x-actions.button>
            </div>
            <p class="text-sm text-base-content/60 mt-2">
                Modifier bisa dikombinasikan bebas, contoh: <code>outline</code> + <code>dash</code> sekaligus.
            </p>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Ukuran</h2>
            <div class="flex flex-wrap items-center gap-3">
                @foreach (['xs', 'sm', 'md', 'lg', 'xl'] as $size)
                    <x-actions.button variant="primary" :size="$size">{{ strtoupper($size) }}</x-actions.button>
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Shape</h2>
            <div class="flex flex-wrap items-center gap-3">
                <x-actions.button variant="primary" circle>+</x-actions.button>
                <x-actions.button variant="primary" square>★</x-actions.button>
                <x-actions.button variant="primary" wide>Wide Button</x-actions.button>
            </div>
            <div class="mt-3">
                <x-actions.button variant="primary" block>Block Button</x-actions.button>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Loading State</h2>
            <div class="flex flex-wrap items-center gap-3">
                <x-actions.button variant="primary" loading>Loading (client-side)</x-actions.button>
                <x-actions.button variant="secondary" size="sm" loading>Loading SM</x-actions.button>
                <x-actions.button variant="accent" size="lg" loading>Loading LG</x-actions.button>
            </div>
            <p class="text-sm text-base-content/60 mt-2">
                Ukuran spinner otomatis menyesuaikan proporsi ukuran tombol
                (<code>loading-xs</code> s/d <code>loading-lg</code>).
            </p>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Dengan Icon</h2>
            <div class="flex flex-wrap items-center gap-3">
                <x-actions.button variant="primary" icon="★">Icon via Prop</x-actions.button>
                <x-actions.button variant="secondary">
                    <x-slot:icon>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                        </svg>
                    </x-slot:icon>
                    Icon via Slot
                </x-actions.button>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Server-Driven Spinner (Livewire)</h2>
            <div class="flex flex-wrap items-center gap-3">
                <x-actions.button variant="primary" wire:click="save" spinner="1">
                    Simpan (auto-detect target)
                </x-actions.button>
                <x-actions.button variant="secondary" wire:click="refreshData" spinner="refreshData">
                    Refresh (manual target)
                </x-actions.button>
            </div>
            <div role="alert" class="alert alert-info mt-4 text-sm">
                <span>
                    Prop <code>spinner="1"</code> otomatis mendeteksi nama method dari
                    atribut <code>wire:click</code> yang menempel di tombol, lalu memasang
                    <code>wire:target</code> dan <code>wire:loading.attr="disabled"</code>
                    secara otomatis. Membutuhkan package <code>livewire/livewire</code>
                    ter-install agar berfungsi — tanpa Livewire, tombol tetap tampil normal
                    tanpa efek loading.
                </span>
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

            <pre data-prefix="1"><code>&lt;x-actions.button variant="primary" size="lg" wire:click="save" spinner="1"&gt;</code></pre>
            <pre data-prefix="2"><code>    Simpan Data</code></pre>
            <pre data-prefix="3"><code>&lt;/x-actions.button&gt;</code></pre>
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
                        <td><code>variant</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>primary, secondary, accent, neutral, info, success, warning, error, ghost, link (literal).
                            Value lain tetap diterima via fallback slug, tapi CSS-nya perlu didaftarkan manual di
                            <code>@source inline()</code>
                        </td>
                    </tr>
                    <tr>
                        <td><code>size</code></td>
                        <td>string</td>
                        <td>md</td>
                        <td>xs, sm, md, lg, xl</td>
                    </tr>
                    <tr>
                        <td><code>outline</code> / <code>soft</code> / <code>dash</code> / <code>glass</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>Modifier style DaisyUI 5, bisa dikombinasikan bebas</td>
                    </tr>
                    <tr>
                        <td><code>circle</code> / <code>square</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>Bentuk tombol untuk konten icon-only</td>
                    </tr>
                    <tr>
                        <td><code>wide</code> / <code>block</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>Menambahkan <code>btn-wide</code> / <code>btn-block</code></td>
                    </tr>
                    <tr>
                        <td><code>active</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>Memaksa tampilan state aktif/terpilih</td>
                    </tr>
                    <tr>
                        <td><code>loading</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>Loading client-side manual (mis. dikontrol Alpine <code>x-bind:loading</code>)</td>
                    </tr>
                    <tr>
                        <td><code>spinner</code></td>
                        <td>bool|string|null</td>
                        <td>null</td>
                        <td><code>true</code>/<code>"1"</code> = auto-detect target dari <code>wire:click</code>; string
                            = nama <code>wire:target</code> manual. Butuh Livewire ter-install</td>
                    </tr>
                    <tr>
                        <td><code>disabled</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>Ditangani berbeda untuk &lt;button&gt; (atribut native) dan &lt;a&gt; (aria + class visual)
                        </td>
                    </tr>
                    <tr>
                        <td><code>href</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>Jika diisi, komponen dirender sebagai &lt;a&gt;</td>
                    </tr>
                    <tr>
                        <td><code>icon</code></td>
                        <td>string|slot</td>
                        <td>null</td>
                        <td>Bisa string atribut (emoji/text) atau <code>&lt;x-slot:icon&gt;</code> untuk SVG custom</td>
                    </tr>
                    <tr>
                        <td><code>xData</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>Inject <code>x-data</code> custom untuk kasus loading client-side murni (non-Livewire)</td>
                    </tr>
                    <tr>
                        <td><code>type</code></td>
                        <td>string</td>
                        <td>button</td>
                        <td>button, submit, reset — hanya berlaku untuk tag &lt;button&gt;</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
