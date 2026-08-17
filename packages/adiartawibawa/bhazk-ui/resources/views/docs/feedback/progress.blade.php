<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Feedback</span>
        <h1 class="text-3xl font-bold">Progress</h1>
        <p class="text-base-content/70 mt-2">Bar linear untuk menampilkan progres suatu proses.</p>
    </div>

    {{-- Live Preview --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Simulasi Upload dengan Button</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 flex flex-col items-center gap-4"
            x-data="{
                percent: 0,
                uploading: false,
                start() {
                    if (this.uploading) return;
                    this.uploading = true;
                    this.percent = 0;
                    const interval = setInterval(() => {
                        this.percent += 10;
                        if (this.percent >= 100) { clearInterval(interval);
                            this.uploading = false; }
                    }, 200);
                }
            }">
            <x-feedback.progress variant="primary" x-bind:value="percent" max="100" class="w-64" />
            <x-actions.button variant="primary" size="sm" x-on:click="start()" x-bind:disabled="uploading">
                <span x-show="!uploading">Mulai Upload</span>
                <span x-show="uploading" x-cloak>Mengunggah... <span x-text="percent"></span>%</span>
            </x-actions.button>
        </div>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Varian Warna</h2>
            <div class="flex flex-col gap-3 max-w-md">
                @foreach (['neutral', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error'] as $variant)
                    <x-feedback.progress :variant="$variant" value="70" max="100" />
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Indeterminate (Tanpa Value)</h2>
            <x-feedback.progress variant="primary" class="w-64" />
            <p class="text-sm text-base-content/60 mt-2">
                Tanpa prop <code>value</code>, progress bar otomatis jadi animasi
                bergerak terus-menerus — cocok saat durasi proses tidak diketahui.
            </p>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-feedback.progress variant="primary" value="70" max="100" class="w-64" /&gt;</code></pre>
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
                        <td>neutral, primary, secondary, accent, info, success, warning, error</td>
                    </tr>
                    <tr>
                        <td><code>value</code></td>
                        <td>int|null</td>
                        <td>null</td>
                        <td>Kosongkan untuk mode indeterminate</td>
                    </tr>
                    <tr>
                        <td><code>max</code></td>
                        <td>int</td>
                        <td>100</td>
                        <td>Nilai maksimum</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
