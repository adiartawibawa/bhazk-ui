<x-layouts.docs>
    <div class="mb-10">
        <span class="badge badge-primary badge-outline mb-2">Mockups</span>
        <h1 class="text-3xl font-bold">Phone</h1>
        <p class="text-base-content/70 mt-2">Menampilkan konten dalam bingkai iPhone.</p>
    </div>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Live Preview — Chat Bubble</h2>
        <div class="border border-base-300 rounded-box p-8 bg-base-100 flex justify-center">
            <x-mockups.phone>
                <div class="bg-neutral-900 h-full p-4 space-y-2 overflow-y-auto">
                    <x-data-display.chat placement="start">
                        <x-slot:image>
                            <x-data-display.avatar src="https://randomuser.me/api/portraits/men/{{ rand(1, 99) }}.jpg"
                                size="w-8" />
                        </x-slot:image>
                        Halo, ada yang bisa dibantu?
                    </x-data-display.chat>
                    <x-data-display.chat placement="end" variant="primary">
                        Saya ingin tanya soal pesanan.
                    </x-data-display.chat>
                </div>
            </x-mockups.phone>
        </div>
        <p class="text-sm text-base-content/60 mt-3">
            Menggabungkan <code>&lt;x-data-display.chat&gt;</code> dan
            <code>&lt;x-data-display.avatar&gt;</code> di dalam layar ponsel.
        </p>
    </section>

    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-3">Dengan Warna Border Custom</h2>
        <div class="flex justify-center">
            <x-mockups.phone class="border-[#ff8938]">
                <div class="bg-neutral-900 text-white h-full grid place-content-center">
                    It's Glowtime.
                </div>
            </x-mockups.phone>
        </div>
        <p class="text-sm text-base-content/60 mt-2 text-center">
            Warna border ditentukan lewat class Tailwind arbitrary
            (<code>border-[#hex]</code>) biasa, bukan prop khusus.
        </p>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-3">Cara Pakai</h2>
        <x-mockups.code class="w-full">
            <x-mockups.code-line prefix="1">&lt;x-mockups.phone&gt;</x-mockups.code-line>
            <x-mockups.code-line prefix="2">&nbsp;&nbsp;&nbsp;&nbsp;&lt;img src="screenshot.jpg"
                /&gt;</x-mockups.code-line>
            <x-mockups.code-line prefix="3">&lt;/x-mockups.phone&gt;</x-mockups.code-line>
        </x-mockups.code>
    </section>
</x-layouts.docs>
