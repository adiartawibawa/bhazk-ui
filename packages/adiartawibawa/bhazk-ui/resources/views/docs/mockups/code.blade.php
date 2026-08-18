<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Mockups</span>
        <h1 class="text-3xl font-bold">Code</h1>
        <p class="text-base-content/70 mt-2">
            Menampilkan blok kode ala editor. Komponen inilah yang dipakai di
            seluruh contoh "Cara Pakai" pada halaman dokumentasi Bhazk UI.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Instalasi</h2>
        <x-mockups.code class="w-full">
            <x-mockups.code-line prefix="$">composer require adiartawibawa/bhazk-ui</x-mockups.code-line>
            <x-mockups.code-line prefix=">" variant="warning">Menginstal...</x-mockups.code-line>
            <x-mockups.code-line prefix=">" variant="success">Selesai!</x-mockups.code-line>
        </x-mockups.code>
    </section>

    <section class="mb-12 space-y-8">
        <div>
            <h2 class="text-xl font-semibold mb-3">Nomor Baris</h2>
            <x-mockups.code class="w-full">
                <x-mockups.code-line prefix="1">class Button extends Component</x-mockups.code-line>
                <x-mockups.code-line prefix="2">{</x-mockups.code-line>
                <x-mockups.code-line prefix="3" variant="warning"> // TODO: tambahkan prop</x-mockups.code-line>
                <x-mockups.code-line prefix="4">}</x-mockups.code-line>
            </x-mockups.code>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Warna Custom Full-Box</h2>
            <x-mockups.code class="w-full bg-primary text-primary-content">
                <x-mockups.code-line>Bisa warna apa pun!</x-mockups.code-line>
            </x-mockups.code>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Highlight Baris Error</h2>
            <x-mockups.code class="w-full">
                <x-mockups.code-line prefix="1">npm run build</x-mockups.code-line>
                <x-mockups.code-line prefix="2">Compiling...</x-mockups.code-line>
                <x-mockups.code-line prefix="3" variant="error">Error! Module not found.</x-mockups.code-line>
            </x-mockups.code>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <x-mockups.code class="w-full">
            <x-mockups.code-line prefix="1">&lt;x-mockups.code&gt;</x-mockups.code-line>
            <x-mockups.code-line prefix="2">&nbsp;&nbsp;&nbsp;&nbsp;&lt;x-mockups.code-line prefix="$"&gt;npm i
                daisyui&lt;/x-mockups.code-line&gt;</x-mockups.code-line>
            <x-mockups.code-line prefix="3">&nbsp;&nbsp;&nbsp;&nbsp;&lt;x-mockups.code-line prefix="&gt;"
                variant="success"&gt;Selesai!&lt;/x-mockups.code-line&gt;</x-mockups.code-line>
            <x-mockups.code-line prefix="4">&lt;/x-mockups.code&gt;</x-mockups.code-line>
        </x-mockups.code>

        <div class="overflow-x-auto mt-6">
            <table class="table">
                <thead>
                    <tr>
                        <th>Komponen</th>
                        <th>Prop</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>&lt;x-mockups.code&gt;</code></td>
                        <td>—</td>
                        <td>Container, tanpa prop khusus</td>
                    </tr>
                    <tr>
                        <td rowspan="2"><code>&lt;x-mockups.code-line&gt;</code></td>
                        <td><code>prefix</code></td>
                        <td>Teks di kiri baris ($, &gt;, 1, 2, dst)</td>
                    </tr>
                    <tr>
                        <td><code>variant</code></td>
                        <td>warning, success, error, info — highlight seluruh baris</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.docs>
