<x-layouts.docs>
    {{-- Header --}}
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Actions</span>
        <h1 class="text-3xl font-bold">Dropdown</h1>
        <p class="text-base-content/70 mt-2">
            Menu kontekstual yang muncul saat trigger diklik (atau di-hover).
            State Alpine terisolasi per instance, tertutup otomatis saat klik
            di luar, tekan <kbd class="kbd kbd-sm">Esc</kbd>, atau memilih salah satu item.
        </p>
    </div>

    {{-- Live Interactive Preview --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview</h2>
        <div class="border border-base-300 rounded-box p-16 flex flex-wrap items-center gap-6 bg-base-100">
            <x-actions.dropdown>
                <x-slot:trigger>
                    <x-actions.button variant="primary">
                        Buka Menu
                    </x-actions.button>
                </x-slot:trigger>

                <li><a>Profil</a></li>
                <li><a>Pengaturan</a></li>
                <li><a class="text-error">Keluar</a></li>
            </x-actions.dropdown>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Coba klik trigger, lalu klik di luar area dropdown atau tekan Esc —
            menu akan tertutup otomatis.
        </p>
    </section>

    {{-- Variasi Showcase --}}
    <section class="mb-12 space-y-10">
        <div>
            <h2 class="text-xl font-semibold mb-3">Posisi (Placement)</h2>
            <div class="flex flex-wrap items-center gap-6 p-10">
                @foreach (['top', 'bottom', 'left', 'right'] as $placement)
                    <x-actions.dropdown :placement="$placement">
                        <x-slot:trigger>
                            <x-actions.button variant="outline" size="lg">
                                {{ ucfirst($placement) }}
                            </x-actions.button>
                        </x-slot:trigger>

                        <li><a>Item Satu</a></li>
                        <li><a>Item Dua</a></li>
                    </x-actions.dropdown>
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Alignment</h2>
            <div class="flex flex-wrap items-center gap-6">
                <x-actions.dropdown align="start">
                    <x-slot:trigger>
                        <x-actions.button variant="secondary" size="sm">Align Start</x-actions.button>
                    </x-slot:trigger>
                    <li><a>Item Satu</a></li>
                    <li><a>Item Dua</a></li>
                </x-actions.dropdown>

                <x-actions.dropdown align="end">
                    <x-slot:trigger>
                        <x-actions.button variant="secondary" size="sm">Align End</x-actions.button>
                    </x-slot:trigger>
                    <li><a>Item Satu</a></li>
                    <li><a>Item Dua</a></li>
                </x-actions.dropdown>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Trigger via Hover</h2>
            <div class="flex flex-wrap items-center gap-6">
                <x-actions.dropdown hover>
                    <x-slot:trigger>
                        <x-actions.button variant="accent" size="sm">Arahkan Kursor</x-actions.button>
                    </x-slot:trigger>
                    <li><a>Muncul saat hover</a></li>
                    <li><a>Tanpa perlu klik</a></li>
                </x-actions.dropdown>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Lebar Konten Custom</h2>
            <div class="flex flex-wrap items-center gap-6">
                <x-actions.dropdown content-class="w-72">
                    <x-slot:trigger>
                        <x-actions.button variant="ghost" size="sm">Menu Lebar</x-actions.button>
                    </x-slot:trigger>
                    <li><a>Item dengan deskripsi lebih panjang di sini</a></li>
                    <li><a>Item lainnya</a></li>
                </x-actions.dropdown>
            </div>
        </div>
    </section>

    {{-- Code Usage Guide --}}
    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>

        <div class="mockup-code relative pt-10">
            <div class="absolute top-3 left-4 flex items-center gap-2 z-10">
                <span class="size-3 rounded-full bg-red-500 shadow-sm"></span>
                <span class="size-3 rounded-full bg-yellow-400 shadow-sm"></span>
                <span class="size-3 rounded-full bg-green-500 shadow-sm"></span>
            </div>

            <pre data-prefix="1"><code>&lt;x-actions.dropdown placement="bottom" align="end"&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;x-slot:trigger&gt;</code></pre>
            <pre data-prefix="3"><code>        &lt;x-actions.button&gt;Menu&lt;/x-actions.button&gt;</code></pre>
            <pre data-prefix="4"><code>    &lt;/x-slot:trigger&gt;</code></pre>
            <pre data-prefix="5"><code></code></pre>
            <pre data-prefix="6"><code>    &lt;li&gt;&lt;a&gt;Profil&lt;/a&gt;&lt;/li&gt;</code></pre>
            <pre data-prefix="7"><code>    &lt;li&gt;&lt;a&gt;Keluar&lt;/a&gt;&lt;/li&gt;</code></pre>
            <pre data-prefix="8"><code>&lt;/x-actions.dropdown&gt;</code></pre>
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
                        <td><code>placement</code></td>
                        <td>string</td>
                        <td>bottom</td>
                        <td>top, bottom, left, right</td>
                    </tr>
                    <tr>
                        <td><code>align</code></td>
                        <td>string</td>
                        <td>start</td>
                        <td>start, end</td>
                    </tr>
                    <tr>
                        <td><code>hover</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>Buka menu saat kursor hover, bukan klik</td>
                    </tr>
                    <tr>
                        <td><code>open</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>State awal saat komponen pertama kali dirender</td>
                    </tr>
                    <tr>
                        <td><code>contentClass</code></td>
                        <td>string</td>
                        <td>w-52</td>
                        <td>Class tambahan untuk panel dropdown (lebar, dsb.)</td>
                    </tr>
                    <tr>
                        <td><code>trigger</code> <span class="text-base-content/50">(slot)</span></td>
                        <td>slot</td>
                        <td>—</td>
                        <td>Wajib diisi — elemen pemicu (biasanya tombol)</td>
                    </tr>
                    <tr>
                        <td><code>$slot</code> <span class="text-base-content/50">(default)</span></td>
                        <td>slot</td>
                        <td>—</td>
                        <td>Isi menu, biasanya daftar <code>&lt;li&gt;&lt;a&gt;</code></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
