<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Feedback</span>
        <h1 class="text-3xl font-bold">Skeleton</h1>
        <p class="text-base-content/70 mt-2">Placeholder animasi shimmer saat konten sedang dimuat.</p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Card Profil Loading</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 flex justify-center">
            <x-data-display.card class="bg-base-200 w-72" border>
                <div class="flex items-center gap-4">
                    <x-feedback.skeleton class="w-16 h-16 rounded-full shrink-0" />
                    <div class="flex flex-col gap-2 w-full">
                        <x-feedback.skeleton text class="w-3/4" />
                        <x-feedback.skeleton text class="w-1/2" />
                    </div>
                </div>
            </x-data-display.card>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Ditaruh di dalam <code>&lt;x-data-display.card&gt;</code> — dimensi
            avatar (bulat) dan garis teks diatur lewat class Tailwind biasa.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Card Gambar + Deskripsi</h2>
            <div class="flex flex-col gap-3 w-64">
                <x-feedback.skeleton class="h-32 w-full" />
                <x-feedback.skeleton text class="w-28" />
                <x-feedback.skeleton text class="w-full" />
                <x-feedback.skeleton text class="w-full" />
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Daftar Baris (List Loading)</h2>
            <div class="flex flex-col gap-3 w-80">
                @for ($i = 0; $i < 3; $i++)
                    <div class="flex items-center gap-3">
                        <x-feedback.skeleton class="w-10 h-10 rounded-full shrink-0" />
                        <x-feedback.skeleton text class="w-full" />
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-feedback.skeleton class="w-16 h-16 rounded-full" /&gt;</code></pre>
            <pre data-prefix="2"><code>&lt;x-feedback.skeleton text class="w-3/4" /&gt;</code></pre>
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
                        <td><code>text</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>Bentuk shimmer khusus untuk placeholder teks</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
