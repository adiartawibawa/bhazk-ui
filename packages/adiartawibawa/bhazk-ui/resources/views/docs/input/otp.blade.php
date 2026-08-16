<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Input</span>
        <h1 class="text-3xl font-bold">OTP</h1>
        <p class="text-base-content/70 mt-2">
            Input kode verifikasi (2FA, login tanpa password) — visualnya
            berupa kotak-kotak digit, tapi tetap satu <code>&lt;input&gt;</code> native.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — dengan Button</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 flex flex-col items-center gap-4">
            <x-input.otp length="6" variant="primary" />
            <x-actions.button variant="primary" size="sm">Verifikasi</x-actions.button>
        </div>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Varian Warna</h2>
            <div class="flex flex-col gap-4">
                @foreach (['neutral', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error'] as $variant)
                    <x-input.otp length="4" :variant="$variant" />
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Ukuran</h2>
            <div class="flex flex-col gap-4">
                @foreach (['xs', 'sm', 'md', 'lg', 'xl'] as $size)
                    <x-input.otp length="4" variant="primary" :size="$size" />
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Jumlah Digit Custom</h2>
            <x-input.otp length="6" variant="secondary" />
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-input.otp length="6" variant="primary" wire:model="kode" /&gt;</code></pre>
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
                        <td><code>length</code></td>
                        <td>int</td>
                        <td>4</td>
                        <td>Jumlah digit — otomatis mengatur maxlength/pattern</td>
                    </tr>
                    <tr>
                        <td><code>variant</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>neutral, primary, secondary, accent, info, success, warning, error</td>
                    </tr>
                    <tr>
                        <td><code>size</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>xs, sm, md, lg, xl</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
