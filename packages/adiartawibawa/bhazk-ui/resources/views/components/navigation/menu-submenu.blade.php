@props([
    'open' => false, // state awal terbuka
    'icon' => null,
])

{{-- Collapsible submenu memakai <details>/<summary> native — sesuai
     rekomendasi resmi DaisyUI, tanpa JS/Alpine sama sekali. --}}
<li>
    <details @if ($open) open @endif>
        <summary>
            @if ($icon)
                <span class="inline-flex shrink-0">{{ $icon }}</span>
            @endif
            {{ $summary }}
        </summary>
        <ul>
            {{ $slot }}
        </ul>
    </details>
</li>
