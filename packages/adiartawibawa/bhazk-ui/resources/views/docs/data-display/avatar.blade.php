<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Data Display</span>
        <h1 class="text-3xl font-bold">Avatar</h1>
        <p class="text-base-content/70 mt-2">
            Representasi visual pengguna — foto, inisial, atau indikator status online/offline.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Avatar + Dropdown Profil</h2>
        <div class="border border-base-300 rounded-box p-16 flex items-center gap-6 bg-base-100">
            <x-actions.dropdown align="end">
                <x-slot:trigger>
                    <x-data-display.avatar src="https://api.dicebear.com/9.x/avataaars/svg?seed={{ Str::random(8) }}"
                        status="online" ring="primary" />
                </x-slot:trigger>

                <li><a>Profil Saya</a></li>
                <li><a>Pengaturan</a></li>
                <li><a class="text-error">Keluar</a></li>
            </x-actions.dropdown>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Avatar dipakai sebagai <code>trigger</code> untuk <code>&lt;x-actions.dropdown&gt;</code> —
            pola umum untuk menu profil pengguna.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Bentuk & Status</h2>
            <div class="flex flex-wrap items-center gap-6">
                <x-data-display.avatar src="https://api.dicebear.com/9.x/avataaars/svg?seed={{ Str::random(8) }}"
                    shape="circle" />
                <x-data-display.avatar src="https://api.dicebear.com/9.x/avataaars/svg?seed={{ Str::random(8) }}"
                    shape="square" />
                <x-data-display.avatar src="https://api.dicebear.com/9.x/avataaars/svg?seed={{ Str::random(8) }}"
                    status="online" />
                <x-data-display.avatar src="https://api.dicebear.com/9.x/avataaars/svg?seed={{ Str::random(8) }}"
                    status="offline" />
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Placeholder (Tanpa Foto)</h2>
            <div class="flex flex-wrap items-center gap-6">
                <x-data-display.avatar placeholder="AW" size="w-16" />
                <x-data-display.avatar placeholder="+5" size="w-12" />
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Avatar Group</h2>
            <x-data-display.avatar-group>
                <x-data-display.avatar src="https://i.pravatar.cc/{{ rand(1, 999) }}" size="w-12" />
                <x-data-display.avatar src="https://i.pravatar.cc/{{ rand(1, 999) }}" size="w-12" />
                <x-data-display.avatar src="https://i.pravatar.cc/{{ rand(1, 999) }}" size="w-12" />
                <x-data-display.avatar placeholder="+99" size="w-12" />
            </x-data-display.avatar-group>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-data-display.avatar</code></pre>
            <pre data-prefix="2"><code>    src="/images/user.jpg"</code></pre>
            <pre data-prefix="3"><code>    status="online"</code></pre>
            <pre data-prefix="4"><code>    ring="primary"</code></pre>
            <pre data-prefix="5"><code>/&gt;</code></pre>
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
                        <td><code>src</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>URL gambar</td>
                    </tr>
                    <tr>
                        <td><code>alt</code></td>
                        <td>string</td>
                        <td>''</td>
                        <td>Teks alternatif gambar</td>
                    </tr>
                    <tr>
                        <td><code>size</code></td>
                        <td>string</td>
                        <td>w-12</td>
                        <td>Class lebar Tailwind (mis. w-16, w-24)</td>
                    </tr>
                    <tr>
                        <td><code>shape</code></td>
                        <td>string</td>
                        <td>circle</td>
                        <td>circle, square</td>
                    </tr>
                    <tr>
                        <td><code>status</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>online, offline</td>
                    </tr>
                    <tr>
                        <td><code>placeholder</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>Teks/inisial jika tanpa <code>src</code></td>
                    </tr>
                    <tr>
                        <td><code>ring</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>primary, secondary, accent, neutral</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
