<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Input</span>
        <h1 class="text-3xl font-bold">Select</h1>
        <p class="text-base-content/70 mt-2">
            Memilih satu nilai dari daftar opsi. Lebar default 20rem —
            tidak perlu <code>w-full max-w-xs</code> manual lagi.
        </p>
    </div>

    {{-- Live Preview --}}
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Filter dengan Button</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100">
            <div class="flex flex-wrap items-center gap-3">
                <x-input.select placeholder="Pilih Kategori" :options="['ui' => 'UI Kit', 'plugin' => 'Plugin', 'theme' => 'Theme']" />
                <x-input.select variant="primary" :options="['terbaru', 'terlaris', 'termurah']" />
                <x-actions.button variant="primary" size="sm">Terapkan</x-actions.button>
            </div>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Prop <code>options</code> menerima array asosiatif (value => label)
            atau list biasa, digabung dengan <code>&lt;x-actions.button&gt;</code>
            sebagai tombol aksi.
        </p>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Dengan Fieldset & Label</h2>
            <fieldset class="fieldset">
                <legend class="fieldset-legend">Browser</legend>
                <x-input.select placeholder="Pilih browser" :options="['Chrome', 'Firefox', 'Safari']" />
                <span class="label">Opsional</span>
            </fieldset>
            <p class="text-sm text-base-content/60 mt-2">
                <code>fieldset</code>/<code>label</code> ditulis native di sini —
                komponen khusus untuk keduanya akan dibuat terpisah nanti.
            </p>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Varian Warna</h2>
            <div class="flex flex-wrap gap-3">
                @foreach (['neutral', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error'] as $variant)
                    <x-input.select :variant="$variant" :placeholder="ucfirst($variant)" :options="['Opsi 1', 'Opsi 2']" />
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Ukuran</h2>
            <div class="flex flex-wrap items-center gap-3">
                @foreach (['xs', 'sm', 'md', 'lg', 'xl'] as $size)
                    <x-input.select :size="$size" :placeholder="strtoupper($size)" :options="['Apple', 'Orange']" />
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Ghost (Tanpa Border)</h2>
            <x-input.select ghost placeholder="Pilih font" :options="['Inter', 'Poppins', 'Raleway']" />
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Grup Opsi Manual (optgroup)</h2>
            <x-input.select placeholder="Pilih model AI">
                <optgroup label="Anthropic">
                    <option>Claude Sonnet</option>
                    <option>Claude Opus</option>
                </optgroup>
                <optgroup label="OpenAI">
                    <option>GPT-4</option>
                    <option disabled>GPT-5 (Segera)</option>
                </optgroup>
            </x-input.select>
            <p class="text-sm text-base-content/60 mt-2">
                Ditulis lewat slot manual — dipakai otomatis begitu ada konten
                di antara tag komponen, mengesampingkan prop <code>options</code>.
            </p>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Disabled</h2>
            <x-input.select disabled placeholder="Tidak bisa dipilih" :options="['A', 'B']" />
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <div class="mockup-code">
            <pre data-prefix="1"><code>&lt;x-input.select</code></pre>
            <pre data-prefix="2"><code>    variant="primary"</code></pre>
            <pre data-prefix="3"><code>    placeholder="Pilih Kota"</code></pre>
            <pre data-prefix="4"><code>    :options="['jkt' => 'Jakarta', 'bdg' => 'Bandung']"</code></pre>
            <pre data-prefix="5"><code>    wire:model="kota"</code></pre>
            <pre data-prefix="6"><code>/&gt;</code></pre>
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
                        <td><code>size</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>xs, sm, md, lg, xl</td>
                    </tr>
                    <tr>
                        <td><code>ghost</code></td>
                        <td>bool</td>
                        <td>false</td>
                        <td>Tanpa border</td>
                    </tr>
                    <tr>
                        <td><code>placeholder</code></td>
                        <td>string|null</td>
                        <td>null</td>
                        <td>Opsi pertama, disabled+selected otomatis</td>
                    </tr>
                    <tr>
                        <td><code>options</code></td>
                        <td>array</td>
                        <td>[]</td>
                        <td>List biasa atau asosiatif value => label</td>
                    </tr>
                    <tr>
                        <td><code>$slot</code></td>
                        <td>slot</td>
                        <td>—</td>
                        <td>Opsional — &lt;option&gt;/&lt;optgroup&gt; manual, mengesampingkan <code>options</code></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
