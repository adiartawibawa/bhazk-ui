@props([
    'href' => null,
    'active' => false,
    'disabled' => false,
    'icon' => null,
])

@php
    $extraAttributes = ['href' => $disabled ? '#' : $href ?? '#'];

    if ($disabled) {
        $extraAttributes['aria-disabled'] = 'true';
        $extraAttributes['tabindex'] = '-1';
    }
@endphp

<li @class(['menu-disabled' => $disabled])>
    <a {{ $attributes->merge($extraAttributes)->class(['menu-active' => $active]) }}>
        @if ($icon)
            <span class="inline-flex shrink-0">{{ $icon }}</span>
        @endif
        {{ $slot }}
    </a>
</li>
