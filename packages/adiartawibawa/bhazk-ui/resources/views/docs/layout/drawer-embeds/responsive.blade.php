<x-layouts.embed>
    <x-layout.drawer id="responsive-drawer" open-on-large="lg" class="h-56">
        <x-layout.drawer-content class="flex items-center justify-center">
            <x-layout.drawer-toggle-button target="responsive-drawer" class="btn-primary lg:hidden">
                Buka Drawer
            </x-layout.drawer-toggle-button>
        </x-layout.drawer-content>
        <x-layout.drawer-side>
            <ul class="menu bg-base-200 min-h-full w-72 p-4">
                <li><a>Sidebar Item 1</a></li>
                <li><a>Sidebar Item 2</a></li>
            </ul>
        </x-layout.drawer-side>
    </x-layout.drawer>
</x-layouts.embed>
