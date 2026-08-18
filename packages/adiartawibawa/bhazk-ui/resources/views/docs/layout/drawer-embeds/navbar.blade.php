<x-layouts.embed>
    <x-layout.drawer id="demo-drawer" class="h-72">
        <x-layout.drawer-content class="flex flex-col">
            <x-navigation.navbar class="bg-base-300 w-full">
                <x-slot:start>
                    <x-layout.drawer-toggle-button target="demo-drawer" class="btn-square btn-ghost">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </x-layout.drawer-toggle-button>
                </x-slot:start>
                <x-slot:center>Bhazk UI</x-slot:center>
            </x-navigation.navbar>
            <div class="flex-1 grid place-items-center">Konten Halaman</div>
        </x-layout.drawer-content>

        <x-layout.drawer-side>
            <x-navigation.menu target="demo-drawer" class="bg-base-200 min-h-full w-64 p-4">
                <x-navigation.menu-item href="#" active>Beranda</x-navigation.menu-item>
                <x-navigation.menu-item href="#">Produk</x-navigation.menu-item>
                <x-navigation.menu-item href="#">Pengaturan</x-navigation.menu-item>
            </x-navigation.menu>
        </x-layout.drawer-side>
    </x-layout.drawer>
</x-layouts.embed>
