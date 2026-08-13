<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Data Display</span>
        <h1 class="text-3xl font-bold">List</h1>
        <p class="text-base-content/70 mt-2">
            Tata letak vertikal untuk menampilkan daftar data berbaris — mis. daftar
            lagu, kontak, atau produk.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — dengan Avatar & Button</h2>
        <div class="border border-base-300 rounded-box p-4 bg-base-100">
            <x-data-display.list class="bg-base-100 rounded-box shadow-md">
                <li class="p-4 pb-2 text-xs opacity-60 tracking-wide">Lagu Paling Sering Diputar</li>

                <x-data-display.list-row>
                    <x-data-display.avatar src="https://api.dicebear.com/9.x/avataaars/svg?seed={{ Str::random(8) }}"
                        size="size-10" shape="square" />
                    <div>
                        <div>Dio Lupa</div>
                        <div class="text-xs uppercase font-semibold opacity-60">Remaining Reason</div>
                    </div>
                    <x-actions.button variant="ghost" square aria-label="Play">▶</x-actions.button>
                </x-data-display.list-row>

                <x-data-display.list-row>
                    <x-data-display.avatar src="https://api.dicebear.com/9.x/avataaars/svg?seed={{ Str::random(8) }}"
                        size="size-10" shape="square" />
                    <div>
                        <div>Ellie Beilish</div>
                        <div class="text-xs uppercase font-semibold opacity-60">Bears of a Fever</div>
                    </div>
                    <x-actions.button variant="ghost" square aria-label="Play">▶</x-actions.button>
                </x-data-display.list-row>
            </x-data-display.list>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Setiap baris menggabungkan <code>&lt;x-data-display.avatar&gt;</code> dan
            <code>&lt;x-actions.button&gt;</code> — kolom di dalam <code>list-row</code>
            bebas disusun consumer sesuai kebutuhan.
        </p>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-data-display.list class="bg-base-100 rounded-box shadow-md"&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;x-data-display.list-row&gt;</code></pre>
            <pre data-prefix="3"><code>        &lt;x-data-display.avatar src="..." /&gt;</code></pre>
            <pre data-prefix="4"><code>        &lt;div&gt;Nama Item&lt;/div&gt;</code></pre>
            <pre data-prefix="5"><code>        &lt;x-actions.button variant="ghost"&gt;⋮&lt;/x-actions.button&gt;</code></pre>
            <pre data-prefix="6"><code>    &lt;/x-data-display.list-row&gt;</code></pre>
            <pre data-prefix="7"><code>&lt;/x-data-display.list&gt;</code></pre>
        </div>

        <div role="alert" class="alert alert-info mt-4 text-sm">
            <span>
                Untuk membuat salah satu kolom melebar mengisi ruang kosong, tambahkan
                utility <code>list-col-grow</code> langsung ke elemen kolom yang
                dimaksud (biasanya kolom teks di tengah).
            </span>
        </div>

        <div class="overflow-x-auto mt-6">
            <table class="table">
                <thead>
                    <tr>
                        <th>Komponen</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>&lt;x-data-display.list&gt;</code></td>
                        <td>Container <code>&lt;ul&gt;</code>, bebas prop khusus</td>
                    </tr>
                    <tr>
                        <td><code>&lt;x-data-display.list-row&gt;</code></td>
                        <td>Baris <code>&lt;li class="list-row"&gt;</code>, isi kolom bebas</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
