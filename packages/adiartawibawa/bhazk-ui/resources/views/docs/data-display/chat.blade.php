<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Data Display</span>
        <h1 class="text-3xl font-bold">Chat Bubble</h1>
        <p class="text-base-content/70 mt-2">
            Menampilkan satu baris percakapan lengkap dengan foto, nama, waktu, dan status.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — dengan Avatar</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 space-y-2">
            <x-data-display.chat placement="start">
                <x-slot:image>
                    <x-data-display.avatar src="https://randomuser.me/api/portraits/men/{{ rand(1, 99) }}.jpg"
                        size="w-10" />
                </x-slot:image>
                <x-slot:header>
                    Obi-Wan Kenobi
                    <time class="text-xs opacity-50">12:45</time>
                </x-slot:header>
                You were the Chosen One!
                <x-slot:footer>Delivered</x-slot:footer>
            </x-data-display.chat>

            <x-data-display.chat placement="end" variant="primary">
                <x-slot:image>
                    <x-data-display.avatar src="https://randomuser.me/api/portraits/women/{{ rand(1, 99) }}.jpg"
                        size="w-10" />
                </x-slot:image>
                <x-slot:header>
                    Anakin
                    <time class="text-xs opacity-50">12:46</time>
                </x-slot:header>
                I hate you!
                <x-slot:footer>Seen at 12:46</x-slot:footer>
            </x-data-display.chat>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Slot <code>image</code> memakai <code>&lt;x-data-display.avatar&gt;</code>
            yang sudah dibuat sebelumnya, bukan markup avatar manual.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Varian Warna Bubble</h2>
            <div class="space-y-2">
                @foreach (['neutral', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error'] as $variant)
                    <x-data-display.chat placement="start" :variant="$variant">
                        Ini bubble dengan variant {{ $variant }}
                    </x-data-display.chat>
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Tanpa Header/Footer/Image</h2>
            <x-data-display.chat placement="start">
                Chat paling sederhana, hanya isi pesan.
            </x-data-display.chat>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-data-display.chat placement="start" variant="primary"&gt;</code></pre>
            <pre data-prefix="2"><code>    &lt;x-slot:image&gt;</code></pre>
            <pre data-prefix="3"><code>        &lt;x-data-display.avatar src="..." size="w-10" /&gt;</code></pre>
            <pre data-prefix="4"><code>    &lt;/x-slot:image&gt;</code></pre>
            <pre data-prefix="5"><code>    &lt;x-slot:header&gt;Nama Pengirim&lt;/x-slot:header&gt;</code></pre>
            <pre data-prefix="6"><code>    Isi pesan di sini.</code></pre>
            <pre data-prefix="7"><code>    &lt;x-slot:footer&gt;Terkirim&lt;/x-slot:footer&gt;</code></pre>
            <pre data-prefix="8"><code>&lt;/x-data-display.chat&gt;</code></pre>
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
                        <td>start</td>
                        <td>start, end</td>
                    </tr>
                    <tr>
                        <td><code>variant</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>neutral, primary, secondary, accent, info, success, warning, error</td>
                    </tr>
                    <tr>
                        <td><code>image</code> <span class="text-base-content/50">(slot)</span></td>
                        <td>slot</td>
                        <td>—</td>
                        <td>Opsional — foto pengirim</td>
                    </tr>
                    <tr>
                        <td><code>header</code> <span class="text-base-content/50">(slot)</span></td>
                        <td>slot</td>
                        <td>—</td>
                        <td>Opsional — nama & waktu</td>
                    </tr>
                    <tr>
                        <td><code>$slot</code> <span class="text-base-content/50">(default)</span></td>
                        <td>slot</td>
                        <td>—</td>
                        <td>Isi pesan</td>
                    </tr>
                    <tr>
                        <td><code>footer</code> <span class="text-base-content/50">(slot)</span></td>
                        <td>slot</td>
                        <td>—</td>
                        <td>Opsional — status pengiriman</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
