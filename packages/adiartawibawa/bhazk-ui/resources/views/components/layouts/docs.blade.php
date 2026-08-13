@props([])

<!DOCTYPE html>
<html lang="id" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhazk UI — Component Docs</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="min-h-screen bg-base-200">
    <div class="drawer lg:drawer-open">
        <input id="bhazk-ui-drawer" type="checkbox" class="drawer-toggle" />

        <div class="drawer-content flex flex-col">
            {{-- Navbar mobile --}}
            <div class="navbar bg-base-100 lg:hidden">
                <label for="bhazk-ui-drawer" class="btn btn-square btn-ghost">☰</label>
                <span class="font-bold ml-2">Bhazk UI</span>
            </div>

            <main class="p-6 lg:p-10 max-w-5xl mx-auto w-full">
                {{ $slot }}
            </main>
        </div>

        {{-- Sidebar --}}
        <div class="drawer-side">
            <label for="bhazk-ui-drawer" class="drawer-overlay"></label>
            <aside class="w-72 min-h-full bg-base-100 p-4">
                <div class="mb-6">
                    <h1 class="text-lg font-bold">Bhazk UI</h1>
                    <p class="text-xs text-base-content/60">Modular UI Component Library with DaisyUI</p>
                </div>

                <ul class="menu">
                    @foreach (config('bhazk-ui.categories', []) as $slug => $category)
                        <li>
                            <details {{ !empty($category['components']) ? 'open' : '' }}>
                                <summary class="font-semibold">{{ $category['label'] }}</summary>
                                <ul>
                                    @forelse ($category['components'] as $component)
                                        @php
                                            $routeName = "docs.{$slug}.{$component}";
                                            $isActive = request()->routeIs($routeName);
                                        @endphp

                                        <li>
                                            <a href="{{ route($routeName, [], false) }}" @class([
                                                'bg-primary/10 text-primary font-semibold' => $isActive,
                                                'text-base-content/70 hover:bg-base-200 hover:text-base-content' => !$isActive,
                                            ])>
                                                {{ ucfirst(str_replace('-', ' ', $component)) }}
                                            </a>
                                        </li>
                                    @empty
                                        <li class="text-base-content/40 text-sm italic">
                                            Belum ada komponen
                                        </li>
                                    @endforelse
                                </ul>
                            </details>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>
    @livewireScriptConfig
</body>

</html>
