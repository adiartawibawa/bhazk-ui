<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Layout</span>
        <h1 class="text-3xl font-bold">Indicator</h1>
        <p class="text-base-content/70 mt-2">Menempatkan elemen kecil di sudut elemen lain — badge notifikasi, status
            online, dsb.</p>
    </div>

    <div role="alert" class="alert alert-warning mb-10 text-sm">
        <span>
            <code>&lt;x-layout.indicator-item&gt;</code> harus ditulis <strong>sebelum</strong>
            elemen utamanya dalam markup — DaisyUI mengandalkan urutan DOM untuk
            positioning-nya.
        </span>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Badge Notifikasi pada Button</h2>
        <div class="border border-base-300 rounded-box p-16 flex justify-center gap-8 bg-base-100">
            <x-layout.indicator>
                <x-layout.indicator-item>
                    <x-data-display.badge variant="secondary" size="sm">99+</x-data-display.badge>
                </x-layout.indicator-item>
                <x-actions.button variant="outline">Inbox</x-actions.button>
            </x-layout.indicator>

            <x-layout.indicator>
                <x-layout.indicator-item vertical="bottom" horizontal="start">
                    <span class="status status-success"></span>
                </x-layout.indicator-item>
                <x-data-display.avatar src="https://randomuser.me/api/portraits/men/{{ rand(1, 99) }}.jpg"
                    size="w-14" />
            </x-layout.indicator>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Menggabungkan <code>&lt;x-data-display.badge&gt;</code> dan
            <code>&lt;x-data-display.avatar&gt;</code> sebagai elemen utama.
        </p>
    </section>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Semua Posisi</h2>
        <div class="flex flex-wrap gap-8 p-8">
            @foreach ([['top', 'start'], ['top', 'center'], ['top', 'end'], ['middle', 'start'], ['middle', 'end'], ['bottom', 'start'], ['bottom', 'center'], ['bottom', 'end']] as [$v, $h])
                <x-layout.indicator>
                    <x-layout.indicator-item :vertical="$v" :horizontal="$h">
                        <x-data-display.badge variant="primary" size="xs">●</x-data-display.badge>
                    </x-layout.indicator-item>
                    <div class="bg-base-300 w-16 h-16 rounded grid place-items-center text-xs">
                        {{ $v }}-{{ $h }}</div>
                </x-layout.indicator>
            @endforeach
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-layout.indicator&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;x-layout.indicator-item&gt;</code></pre>
            <pre data-prefix="3"><code>        &lt;x-data-display.badge variant="secondary"&gt;99+&lt;/x-data-display.badge&gt;</code></pre>
            <pre data-prefix="4"><code>    &lt;/x-layout.indicator-item&gt;</code></pre>
            <pre data-prefix="5"><code>    &lt;x-actions.button&gt;Inbox&lt;/x-actions.button&gt;</code></pre>
            <pre data-prefix="6"><code>&lt;/x-layout.indicator&gt;</code></pre>
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
                        <td>string</td>
                        <td>top</td>
                        <td>top, middle, bottom</td>
                    </tr>
                    <tr>
                        <td><code>horizontal</code></td>
                        <td>string</td>
                        <td>end</td>
                        <td>start, center, end</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
