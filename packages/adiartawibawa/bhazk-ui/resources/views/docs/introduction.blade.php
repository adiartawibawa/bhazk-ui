<x-layouts.docs>
    <div class="mb-10">
        <div class="flex items-center gap-2 mb-2">
            <x-data-display.badge variant="primary" style="soft">v1.0</x-data-display.badge>
            <x-data-display.badge variant="neutral" style="soft">MIT License</x-data-display.badge>
        </div>
        <h1 class="text-4xl font-bold">Bhazk UI</h1>
        <p class="text-base-content/70 mt-2 text-lg">
            Modular UI Component Library with DaisyUI — 60+ komponen Blade
            siap pakai, dibangun untuk Laravel 13, DaisyUI 5, dan Alpine.js.
        </p>
    </div>

    {{-- Fitur singkat --}}
    <section class="mb-14">
        <div class="grid sm:grid-cols-3 gap-4">
            <x-data-display.card class="bg-base-200" size="sm">
                <x-icon set="lucide" name="toy-brick" class="w-6 h-6 text-primary mb-1" />
                <x-slot:title>Composable</x-slot:title>
                <p class="text-xs text-base-content/60">Semua komponen bisa saling dikombinasikan tanpa konflik.</p>
            </x-data-display.card>
            <x-data-display.card class="bg-base-200" size="sm">
                <x-icon set="lucide" name="feather" class="w-6 h-6 text-secondary mb-1" />
                <x-slot:title>Ringan</x-slot:title>
                <p class="text-xs text-base-content/60">Mayoritas murni CSS DaisyUI — Alpine.js hanya jika perlu.</p>
            </x-data-display.card>
            <x-data-display.card class="bg-base-200" size="sm">
                <x-icon set="lucide" name="book-open-text" class="w-6 h-6 text-accent mb-1" />
                <x-slot:title>Terdokumentasi</x-slot:title>
                <p class="text-xs text-base-content/60">Setiap komponen punya halaman docs interaktif.</p>
            </x-data-display.card>
        </div>
    </section>

    {{-- Requirements --}}
    <section class="mb-14">
        <h2 class="text-2xl font-bold mb-4">Kebutuhan Sistem</h2>
        <div class="overflow-x-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th>Requirement</th>
                        <th>Versi Minimum</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>PHP</td>
                        <td>^8.3</td>
                    </tr>
                    <tr>
                        <td>Laravel</td>
                        <td>^13.0</td>
                    </tr>
                    <tr>
                        <td>Node.js</td>
                        <td>18+ (untuk build asset via Vite)</td>
                    </tr>
                    <tr>
                        <td>Tailwind CSS</td>
                        <td>^4.0</td>
                    </tr>
                    <tr>
                        <td>DaisyUI</td>
                        <td>^5.0</td>
                    </tr>
                    <tr>
                        <td>Alpine.js</td>
                        <td>^3.0</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    {{-- Instalasi --}}
    <section class="mb-14">
        <h2 class="text-2xl font-bold mb-6">Instalasi</h2>

        <x-navigation.tabs style="lift" class="mb-6">
            <x-navigation.tab-panel name="install-mode" label="Via Composer (Published)" active>
                <p class="text-sm text-base-content/70 mb-4">
                    Pakai cara ini kalau package sudah dipublikasikan ke Packagist
                    atau repository Git.
                </p>
                <x-mockups.code class="w-full">
                    <x-mockups.code-line prefix="$">composer require adiartawibawa/bhazk-ui</x-mockups.code-line>
                </x-mockups.code>
            </x-navigation.tab-panel>

            <x-navigation.tab-panel name="install-mode" label="Path Repository (Development Lokal)">
                <p class="text-sm text-base-content/70 mb-4">
                    Pakai cara ini kalau package masih dikembangkan langsung di
                    dalam monorepo project (seperti project ini).
                </p>
                <div class="mockup-code text-sm mb-4">
                    <pre data-prefix="1"><code>// composer.json (root project)</code></pre>
                    <pre data-prefix="2"><code>"repositories": [</code></pre>
                    <pre data-prefix="3"><code>    {</code></pre>
                    <pre data-prefix="4"><code>        "type": "path",</code></pre>
                    <pre data-prefix="5"><code>        "url": "packages/adiartawibawa/bhazk-ui",</code></pre>
                    <pre data-prefix="6"><code>        "options": { "symlink": true }</code></pre>
                    <pre data-prefix="7"><code>    }</code></pre>
                    <pre data-prefix="8"><code>]</code></pre>
                </div>
                <x-mockups.code class="w-full">
                    <x-mockups.code-line prefix="$">composer require
                        adiartawibawa/bhazk-ui:@dev</x-mockups.code-line>
                </x-mockups.code>
            </x-navigation.tab-panel>
        </x-navigation.tabs>

        <x-navigation.steps direction="vertical" class="w-full">
            <x-navigation.step-item variant="primary" content="1">
                <div class="pb-8 text-left">
                    <p class="font-semibold mb-2">Install dependency npm</p>
                    <x-mockups.code class="w-full">
                        <x-mockups.code-line prefix="$">npm install daisyui@latest alpinejs</x-mockups.code-line>
                    </x-mockups.code>
                </div>
            </x-navigation.step-item>

            <x-navigation.step-item variant="primary" content="2">
                <div class="pb-8 text-left">
                    <p class="font-semibold mb-2">
                        Konfigurasi <code>resources/css/app.css</code>
                    </p>

                    <div class="mockup-code text-sm">
                        <pre data-prefix="1"><code>&#64;import "tailwindcss";</code></pre>
                        <pre data-prefix="2"><code></code></pre>
                        <pre data-prefix="3"><code>&#64;source '../views';</code></pre>
                        <pre data-prefix="4"><code>&#64;source "../**/*.blade.php";</code></pre>
                        <pre data-prefix="5"><code>&#64;source '../../packages/adiartawibawa/bhazk-ui/resources/views/**/*.blade.php';</code></pre>
                        <pre data-prefix="6"><code></code></pre>
                        <pre data-prefix="7"><code>&#64;plugin "daisyui" {</code></pre>
                        <pre data-prefix="8"><code>    themes: light --default, dark --prefersdark;</code></pre>
                        <pre data-prefix="9"><code>}</code></pre>
                        <pre data-prefix="10"><code></code></pre>
                        <pre data-prefix="11"><code>[x-cloak] { display: none !important; }</code></pre>
                    </div>

                    <div role="alert" class="alert alert-warning mt-3 text-sm">
                        <span>
                            Baris <code>&#64;source</code> yang mengarah ke folder package
                            <strong>wajib ada</strong> — tanpa ini, class Tailwind yang
                            dipakai komponen tidak akan ter-compile (lihat kasus nyata
                            di halaman
                            <a href="#riwayat-masalah" class="link link-primary">
                                Riwayat Masalah
                            </a>
                            di bawah).
                        </span>
                    </div>
                </div>
            </x-navigation.step-item>

            <x-navigation.step-item variant="primary" content="3">
                <div class="pb-8 text-left">
                    <p class="font-semibold mb-2">Konfigurasi <code>resources/js/app.js</code></p>
                    <div class="mockup-code text-sm">
                        <pre data-prefix="1"><code>import Alpine from 'alpinejs';</code></pre>
                        <pre data-prefix="2"><code></code></pre>
                        <pre data-prefix="3"><code>window.Alpine = Alpine;</code></pre>
                        <pre data-prefix="4"><code>Alpine.start();</code></pre>
                    </div>
                    <p class="text-sm text-base-content/60 mt-3">
                        Kalau pakai Livewire, Alpine biasanya sudah otomatis di-start
                        lewat <code>Livewire.start()</code> — cukup pastikan urutan
                        script tidak terbalik (lihat langkah berikutnya).
                    </p>
                </div>
            </x-navigation.step-item>

            <x-navigation.step-item variant="primary" content="4">
                <div class="pb-8 text-left">
                    <p class="font-semibold mb-2">
                        Publish assets (untuk komponen File Uploader/FilePond)
                    </p>

                    <x-mockups.code class="w-full">
                        <x-mockups.code-line prefix="$">
                            php artisan vendor:publish --tag=bhazk-ui-assets
                        </x-mockups.code-line>
                    </x-mockups.code>

                    <div class="mockup-code text-sm mt-2">
                        <pre data-prefix="1">
                <code>&lt;x-layouts.bhazk-ui-scripts /&gt;</code>
            </pre>

                        <pre data-prefix="2">
                <code>&#64;vite(['resources/css/app.css', 'resources/js/app.js'])</code>
            </pre>
                    </div>

                    <p class="text-xs text-base-content/50 mt-2">
                        Langkah ini opsional — lewati saja jika tidak memakai
                        komponen File Uploader.
                    </p>
                </div>
            </x-navigation.step-item>

            <x-navigation.step-item variant="primary" content="5">
                <div class="text-left">
                    <p class="font-semibold mb-2">Build asset</p>
                    <x-mockups.code class="w-full">
                        <x-mockups.code-line prefix="$">npm run dev</x-mockups.code-line>
                    </x-mockups.code>
                </div>
            </x-navigation.step-item>
        </x-navigation.steps>
    </section>

    {{-- Pemakaian --}}
    <section class="mb-14">
        <h2 class="text-2xl font-bold mb-4">Cara Pakai</h2>
        <p class="text-base-content/70 mb-4">
            Semua komponen langsung tersedia lewat namespace kategori masing-masing,
            tanpa perlu import atau registrasi tambahan.
        </p>
        <x-mockups.code class="w-full">
            <x-mockups.code-line prefix="1">&lt;x-actions.button variant="primary"
                size="lg"&gt;</x-mockups.code-line>
            <x-mockups.code-line prefix="2">&nbsp;&nbsp;&nbsp;&nbsp;Simpan Data</x-mockups.code-line>
            <x-mockups.code-line prefix="3">&lt;/x-actions.button&gt;</x-mockups.code-line>
        </x-mockups.code>
    </section>

    {{-- Opsional: Icon set --}}
    <section class="mb-14">
        <h2 class="text-2xl font-bold mb-4">Opsional: Icon Set Kustom</h2>
        <p class="text-base-content/70 mb-4">
            Komponen <a href="{{ route('docs.utilities.icon') }}" class="link link-primary">Icon</a>
            sudah membawa 5 icon demo bawaan. Untuk pakai icon set sungguhan (mis. Lucide):
        </p>
        <x-mockups.code class="w-full mb-4">
            <x-mockups.code-line prefix="$">npm install lucide-static</x-mockups.code-line>
        </x-mockups.code>
        <x-mockups.code class="w-full mb-4">
            <x-mockups.code-line prefix="$">php artisan vendor:publish --tag=bhazk-ui-config</x-mockups.code-line>
        </x-mockups.code>
        <div class="mockup-code text-sm">
            <pre data-prefix="1"><code>// config/bhazk-ui.php</code></pre>
            <pre data-prefix="2"><code>'icons' => [</code></pre>
            <pre data-prefix="3"><code>    'default' => 'lucide',</code></pre>
            <pre data-prefix="4"><code>    'sets' => [</code></pre>
            <pre data-prefix="5"><code>        'lucide' => base_path('node_modules/lucide-static/icons'),</code></pre>
            <pre data-prefix="6"><code>    ],</code></pre>
            <pre data-prefix="7"><code>],</code></pre>
        </div>
    </section>

    {{-- Verifikasi --}}
    <section class="mb-14">
        <h2 class="text-2xl font-bold mb-4">Verifikasi Instalasi</h2>
        <x-feedback.alert variant="info" class="mb-4">
            <x-icon set="bhazk-ui-demo" name="search" class="w-5 h-5" />
            Jalankan urutan berikut untuk memastikan semua terpasang benar.
        </x-feedback.alert>
        <x-mockups.code class="w-full">
            <x-mockups.code-line prefix="$">php artisan view:clear</x-mockups.code-line>
            <x-mockups.code-line prefix="$">php artisan config:clear</x-mockups.code-line>
            <x-mockups.code-line prefix="$">npm run dev</x-mockups.code-line>
        </x-mockups.code>
        <p class="text-sm text-base-content/60 mt-4">
            Buka halaman mana pun di sidebar kiri — kalau tombol punya warna,
            dropdown bisa dibuka, dan tidak ada error di console, instalasi berhasil.
        </p>
    </section>

    {{-- Riwayat masalah umum --}}
    <section id="riwayat-masalah">
        <h2 class="text-2xl font-bold mb-4">Masalah Umum</h2>
        <div class="space-y-2">
            <x-data-display.collapse icon="arrow" class="bg-base-200 border border-base-300">
                <x-slot:title>Warna komponen tidak muncul (tombol putih polos)</x-slot:title>
                Pastikan baris <code>&#64;source</code> di <code>app.css</code> mengarah
                ke folder <code>packages/adiartawibawa/bhazk-ui/resources/views</code> —
                Tailwind hanya men-generate CSS untuk class yang ditemukan secara
                harfiah di file yang di-scan.
            </x-data-display.collapse>

            <x-data-display.collapse icon="arrow" class="bg-base-200 border border-base-300">
                <x-slot:title>Alpine Expression Error: "... is not defined"</x-slot:title>
                Biasanya soal urutan <code>&lt;script&gt;</code> — pastikan
                <code>&lt;x-layouts.bhazk-ui-scripts /&gt;</code> diletakkan
                <strong>sebelum</strong> <code>&#64;vite(...)</code> di <code>&lt;head&gt;</code>,
                supaya listener <code>alpine:init</code> sempat terdaftar sebelum
                Alpine/Livewire di-start.
            </x-data-display.collapse>

            <x-data-display.collapse icon="arrow" class="bg-base-200 border border-base-300">
                <x-slot:title>Komponen fixed (Drawer/Dock/Modal) menutupi seluruh layar saat didemokan</x-slot:title>
                Ini hanya soal cara menampilkan demo di satu halaman yang sama —
                bukan bug komponen. Bungkus demo dengan <code>class="transform"</code>
                (untuk Dock) atau render dalam <code>&lt;iframe&gt;</code> terisolasi
                (untuk Drawer) jika ingin ditampilkan berdampingan dengan komponen
                serupa lain di halaman yang sama.
            </x-data-display.collapse>
        </div>
    </section>
</x-layouts.docs>
