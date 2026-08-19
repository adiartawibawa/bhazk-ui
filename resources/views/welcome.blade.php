<x-layouts::app>

    {{-- HERO --}}
    <section class="relative overflow-hidden bg-base-100 pt-16 pb-24">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <div class="flex justify-center gap-2 mb-6">
                <x-data-display.badge style="soft" variant="primary">v1.0</x-data-display.badge>
                <x-data-display.badge style="soft" variant="secondary">MIT License</x-data-display.badge>

                <x-actions.button href="https://github.com/adiartawibawa/bhazk-ui" variant="ghost" size="xs"
                    class="gap-1">
                    <x-icon name="lucide:star" class="w-3.5 h-3.5" />
                    Kasih star di GitHub
                </x-actions.button>
            </div>

            <h1 class="text-5xl sm:text-6xl font-black leading-[1.1] mb-4">
                Komponen Blade yang siap dipakai,<br />
                <span class="text-primary">tanpa bikin UI terasa biasa.</span>
            </h1>

            <p class="text-lg text-base-content/60 mb-8 max-w-lg mx-auto">
                Bangun UI Laravel lebih cepat tanpa sibuk mengulang class Tailwind.
                Tinggal panggil komponennya, atur seperlunya, lalu lanjut kerjakan
                fitur yang penting.
            </p>

            <div class="mockup-code text-left max-w-md mx-auto mb-8 text-sm">
                <pre data-prefix="$"><code>composer require adiartawibawa/bhazk-ui</code></pre>
            </div>

            <div class="flex flex-wrap justify-center gap-3">
                <x-actions.button href="/docs/actions/button" variant="primary" size="lg">
                    Lihat Komponen →
                </x-actions.button>

                <x-actions.button href="#tema" variant="ghost" size="lg">
                    <x-icon name="lucide:palette" class="w-5 h-5" />
                    Coba Ganti Tema
                </x-actions.button>
            </div>
        </div>

        {{-- Dekorasi --}}
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-primary/10 rounded-full blur-3xl -z-10"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-secondary/10 rounded-full blur-3xl -z-10"></div>
    </section>


    {{-- LIVE THEME SWITCHER --}}
    <section id="tema" class="py-16 bg-base-200 border-y border-base-300">
        <div class="max-w-3xl mx-auto px-6 text-center">
            <h2 class="text-2xl font-bold mb-2">
                Ganti tema, lihat hasilnya langsung. 🎨
            </h2>

            <p class="text-base-content/60 mb-8 text-sm">
                Bukan preview gambar. Komponennya benar-benar ikut berganti
                tema DaisyUI secara live. Coba saja.
            </p>

            <div x-data="{
                theme: 'light',
                themes: ['light', 'dark', 'cupcake', 'synthwave', 'forest', 'valentine'],
                setTheme(t) {
                    this.theme = t;
                    document.documentElement.setAttribute('data-theme', t);
                }
            }" class="flex flex-wrap justify-center gap-2 mb-10">
                <template x-for="t in themes" :key="t">
                    <button type="button" x-on:click="setTheme(t)" x-text="t" class="btn btn-sm capitalize"
                        x-bind:class="theme === t ? 'btn-primary' : 'btn-ghost'"></button>
                </template>
            </div>

            <x-data-display.card class="bg-base-100 shadow-xl text-left max-w-sm mx-auto" border>
                <x-slot:title>
                    Halo dari sini
                    <x-data-display.badge variant="success" size="sm">
                        Live
                    </x-data-display.badge>
                </x-slot:title>

                <p class="text-sm text-base-content/70">
                    Button dan card ini langsung mengikuti tema yang kamu pilih.
                </p>

                <x-slot:actions>
                    <x-actions.button variant="ghost" size="sm">
                        Nanti aja
                    </x-actions.button>

                    <x-actions.button variant="primary" size="sm">
                        Oke, Lanjut
                    </x-actions.button>
                </x-slot:actions>
            </x-data-display.card>
        </div>
    </section>


    {{-- SHOWCASE --}}
    <section id="komponen" class="py-20 bg-base-100">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-2">
                    Bukan sekadar mockup. Ini komponen sungguhan.
                </h2>

                <p class="text-base-content/60">
                    Semua yang kamu lihat di sini dirender langsung oleh Bhazk UI —
                    bukan screenshot, bukan gambar statis.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">

                <x-data-display.card class="bg-base-200" size="sm">
                    <p class="text-xs text-base-content/50 mb-3 font-mono">
                        &lt;x-actions.button&gt;
                    </p>

                    <div class="flex flex-wrap gap-2">
                        <x-actions.button size="sm" variant="primary">
                            Primary
                        </x-actions.button>

                        <x-actions.button size="sm" variant="secondary">
                            Secondary
                        </x-actions.button>

                        <x-actions.button size="sm" loading>
                            Loading
                        </x-actions.button>
                    </div>
                </x-data-display.card>


                <x-data-display.card class="bg-base-200" size="sm">
                    <p class="text-xs text-base-content/50 mb-3 font-mono">
                        &lt;x-data-display.badge&gt;
                    </p>

                    <div class="flex flex-wrap gap-2">
                        <x-data-display.badge variant="primary">
                            Baru
                        </x-data-display.badge>

                        <x-data-display.badge variant="success" style="soft">
                            Aktif
                        </x-data-display.badge>

                        <x-data-display.badge variant="error" style="outline">
                            3
                        </x-data-display.badge>
                    </div>
                </x-data-display.card>


                <x-data-display.card class="bg-base-200" size="sm">
                    <p class="text-xs text-base-content/50 mb-3 font-mono">
                        &lt;x-feedback.alert&gt;
                    </p>

                    <x-feedback.alert variant="info" class="text-xs py-2">
                        Info penting nih.
                    </x-feedback.alert>
                </x-data-display.card>


                <x-data-display.card class="bg-base-200" size="sm">
                    <p class="text-xs text-base-content/50 mb-3 font-mono">
                        &lt;x-input.toggle&gt;
                    </p>

                    <div class="flex gap-3">
                        <x-input.toggle variant="primary" checked />
                        <x-input.toggle variant="success" checked />
                        <x-input.rating value="4" readonly size="sm" />
                    </div>
                </x-data-display.card>


                <x-data-display.card class="bg-base-200" size="sm">
                    <p class="text-xs text-base-content/50 mb-3 font-mono">
                        &lt;x-data-display.avatar&gt;
                    </p>

                    <x-data-display.avatar-group>
                        <x-data-display.avatar src="https://i.pravatar.cc/{{ rand(1, 999) }}" size="w-10" />

                        <x-data-display.avatar src="https://i.pravatar.cc/{{ rand(1, 999) }}" size="w-10" />

                        <x-data-display.avatar placeholder="+9" size="w-10" />
                    </x-data-display.avatar-group>
                </x-data-display.card>


                <x-data-display.card class="bg-base-200" size="sm">
                    <p class="text-xs text-base-content/50 mb-3 font-mono">
                        &lt;x-feedback.loading&gt;
                    </p>

                    <div class="flex gap-3">
                        <x-feedback.loading type="spinner" color="primary" />

                        <x-feedback.loading type="dots" color="secondary" />

                        <x-feedback.loading type="ring" color="accent" />
                    </div>
                </x-data-display.card>

            </div>
        </div>
    </section>


    {{-- KATEGORI --}}
    <section class="py-20 bg-base-200">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-2">
                    Yang kamu butuhkan, ada di sini.
                </h2>

                <p class="text-base-content/60">
                    8 kategori komponen. Pilih yang kamu butuhkan, langsung pakai.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach ([
        [
            'icon' => 'mouse-pointer-click',
            'title' => 'Actions',
            'href' => '/docs/actions/button',
        ],
        [
            'icon' => 'table',
            'title' => 'Data Display',
            'href' => '/docs/data-display/badge',
        ],
        [
            'icon' => 'compass',
            'title' => 'Navigation',
            'href' => '/docs/navigation/breadcrumbs',
        ],
        [
            'icon' => 'type',
            'title' => 'Input',
            'href' => '/docs/input/input-field',
        ],
        [
            'icon' => 'bell',
            'title' => 'Feedback',
            'href' => '/docs/feedback/alert',
        ],
        [
            'icon' => 'layout-panel-left',
            'title' => 'Layout',
            'href' => '/docs/layout/divider',
        ],
        [
            'icon' => 'monitor',
            'title' => 'Mockups',
            'href' => '/docs/mockups/browser',
        ],
        [
            'icon' => 'shapes',
            'title' => 'Icon',
            'href' => '/docs/utilities/icon',
        ],
    ] as $cat)
                    <a href="{{ $cat['href'] }}" class="group">
                        <x-data-display.card
                            class="bg-base-100 h-full group-hover:-translate-y-1 group-hover:shadow-lg transition-all"
                            size="sm">
                            <x-icon :name="'lucide:' . $cat['icon']" class="w-6 h-6 text-primary mb-1" />

                            <x-slot:title>
                                {{ $cat['title'] }}
                            </x-slot:title>
                        </x-data-display.card>
                    </a>
                @endforeach
            </div>
        </div>
    </section>


    {{-- CTA PENUTUP --}}
    <section class="py-24 bg-base-100 text-center">
        <div class="max-w-lg mx-auto px-6">
            <h2 class="text-3xl font-bold mb-3">
                Kalau cocok, langsung pakai.
            </h2>

            <p class="text-base-content/60 mb-8">
                Gratis, open-source, dan dibuat untuk Laravel.
            </p>

            <x-actions.button href="/docs/actions/button" variant="primary" size="lg">
                Buka Dokumentasi
            </x-actions.button>
        </div>
    </section>

</x-layouts::app>
