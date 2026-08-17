<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Feedback</span>
        <h1 class="text-3xl font-bold">Radial Progress</h1>
        <p class="text-base-content/70 mt-2">Indikator progres berbentuk lingkaran.</p>
    </div>

    {{-- Live Preview --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Dashboard Stat dengan Card</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 flex justify-center" x-data="{ percent: 0 }"
            x-init="setInterval(() => { percent = percent < 88 ? percent + 1 : 88 }, 20)">
            <x-data-display.card class="bg-base-200 w-56 items-center text-center" border>
                <x-slot:title>Penyelesaian Proyek</x-slot:title>
                <x-feedback.radial-progress color="primary" x-bind:style="'--value:' + percent"
                    x-bind:aria-valuenow="percent">
                    <span x-text="percent + '%'"></span>
                </x-feedback.radial-progress>
            </x-data-display.card>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Angka berjalan naik otomatis dari 0 ke 88% via Alpine — digabung
            dengan <code>&lt;x-data-display.card&gt;</code>.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Varian Warna</h2>
            <div class="flex flex-wrap gap-6">
                @foreach (['primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error'] as $color)
                    <x-feedback.radial-progress :color="$color" value="70">70%</x-feedback.radial-progress>
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Ukuran & Ketebalan Custom</h2>
            <div class="flex flex-wrap items-center gap-6">
                <x-feedback.radial-progress color="primary" value="45" size="3rem" thickness="2px"
                    class="text-xs">45%</x-feedback.radial-progress>
                <x-feedback.radial-progress color="primary" value="45"
                    size="6rem">45%</x-feedback.radial-progress>
                <x-feedback.radial-progress color="primary" value="45" size="10rem" thickness="1rem"
                    class="text-lg">45%</x-feedback.radial-progress>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Tanpa Teks (Dekoratif)</h2>
            <x-feedback.radial-progress color="success" value="60" class="[--thickness:4px]" />
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-feedback.radial-progress color="primary" value="70" size="6rem"&gt;</code></pre>
            <pre data-prefix="2"><code>    70%</code></pre>
            <pre data-prefix="3"><code>&lt;/x-feedback.radial-progress&gt;</code></pre>
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
                        <td><code>value</code></td>
                        <td>int</td>
                        <td>0</td>
                        <td>Nilai 0–100</td>
                    </tr>
                    <tr>
                        <td><code>color</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>primary, secondary, accent, neutral, info, success, warning, error</td>
                    </tr>
                    <tr>
                        <td><code>size</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>Diameter custom, mis. "6rem"</td>
                    </tr>
                    <tr>
                        <td><code>thickness</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>Ketebalan cincin custom, mis. "2px"</td>
                    </tr>
                    <tr>
                        <td><code>$slot</code></td>
                        <td>slot</td>
                        <td>—</td>
                        <td>Opsional — teks di tengah (mis. "70%")</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
