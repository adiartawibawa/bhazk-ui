<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Navigation</span>
        <h1 class="text-3xl font-bold">Pagination</h1>
        <p class="text-base-content/70 mt-2">
            DaisyUI tidak punya komponen pagination khusus — dibangun dari
            <code>join</code> yang membungkus sekumpulan
            <code>&lt;x-actions.button class="join-item"&gt;</code>.
        </p>
    </div>

    {{-- Live Preview --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 flex justify-center">
            <x-navigation.pagination>
                <x-actions.button class="join-item">«</x-actions.button>
                <x-actions.button class="join-item" active>1</x-actions.button>
                <x-actions.button class="join-item">2</x-actions.button>
                <x-actions.button class="join-item">3</x-actions.button>
                <x-actions.button class="join-item">»</x-actions.button>
            </x-navigation.pagination>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Seluruh item adalah <code>&lt;x-actions.button&gt;</code> biasa —
            prop <code>active</code> menandai halaman saat ini, konsisten
            dengan cara pakai button di komponen lain.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Sebagai Link (href)</h2>
            <div class="flex justify-center">
                <x-navigation.pagination>
                    <x-actions.button class="join-item" href="?page=1">1</x-actions.button>
                    <x-actions.button class="join-item" href="?page=2" active>2</x-actions.button>
                    <x-actions.button class="join-item" href="?page=3">3</x-actions.button>
                </x-navigation.pagination>
            </div>
            <p class="text-sm text-base-content/60 mt-2 text-center">
                Cukup isi prop <code>href</code> — komponen button otomatis
                merender sebagai <code>&lt;a&gt;</code>, bukan <code>&lt;button&gt;</code>.
            </p>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Dengan Tombol Nonaktif</h2>
            <div class="flex justify-center">
                <x-navigation.pagination>
                    <x-actions.button class="join-item" disabled>«</x-actions.button>
                    <x-actions.button class="join-item" active>1</x-actions.button>
                    <x-actions.button class="join-item">2</x-actions.button>
                    <x-actions.button class="join-item">»</x-actions.button>
                </x-navigation.pagination>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Ukuran</h2>
            <div class="flex flex-col items-center gap-3">
                @foreach (['xs', 'sm', 'md', 'lg'] as $size)
                    <x-navigation.pagination>
                        <x-actions.button class="join-item" :size="$size">1</x-actions.button>
                        <x-actions.button class="join-item" :size="$size" active>2</x-actions.button>
                        <x-actions.button class="join-item" :size="$size">3</x-actions.button>
                    </x-navigation.pagination>
                @endforeach
            </div>
            <p class="text-sm text-base-content/60 mt-2 text-center">
                Ukuran diwarisi langsung dari prop <code>size</code> milik
                <code>&lt;x-actions.button&gt;</code> — tidak ada prop ukuran
                terpisah di komponen pagination.
            </p>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Vertikal</h2>
            <div class="flex justify-center">
                <x-navigation.pagination vertical>
                    <x-actions.button class="join-item">1</x-actions.button>
                    <x-actions.button class="join-item" active>2</x-actions.button>
                    <x-actions.button class="join-item">3</x-actions.button>
                </x-navigation.pagination>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Rentang Panjang dengan Ellipsis</h2>
            <div class="flex justify-center">
                <x-navigation.pagination>
                    <x-actions.button class="join-item">1</x-actions.button>
                    <x-actions.button class="join-item" disabled>...</x-actions.button>
                    <x-actions.button class="join-item">42</x-actions.button>
                    <x-actions.button class="join-item" active>43</x-actions.button>
                    <x-actions.button class="join-item">44</x-actions.button>
                    <x-actions.button class="join-item" disabled>...</x-actions.button>
                    <x-actions.button class="join-item">99</x-actions.button>
                </x-navigation.pagination>
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-navigation.pagination&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;x-actions.button class="join-item" href="?page=1"&gt;1&lt;/x-actions.button&gt;</code></pre>
            <pre data-prefix="3"><code>    &lt;x-actions.button class="join-item" href="?page=2" active&gt;2&lt;/x-actions.button&gt;</code></pre>
            <pre data-prefix="4"><code>    &lt;x-actions.button class="join-item" href="?page=3"&gt;3&lt;/x-actions.button&gt;</code></pre>
            <pre data-prefix="5"><code>&lt;/x-navigation.pagination&gt;</code></pre>
        </div>

        <div role="alert" class="alert alert-info mt-4 text-sm">
            <span>
                Class <code>join-item</code> WAJIB ditambahkan manual di setiap
                <code>&lt;x-actions.button&gt;</code> — ini bukan prop bawaan button
                karena <code>join-item</code> spesifik untuk konteks pengelompokan
                (join), bukan sifat button itu sendiri.
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
                        <td><code>vertical</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>Susun item secara vertikal</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
