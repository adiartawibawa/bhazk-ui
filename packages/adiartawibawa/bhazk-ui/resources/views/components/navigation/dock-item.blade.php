@props([
    'href' => null,
    'active' => false,
    'disabled' => false,
    'label' => null,
])

@php
    $tag = filled($href) ? 'a' : 'button';

    $extraAttributes = [];
    if ($tag === 'a') {
        $extraAttributes['href'] = $disabled ? '#' : $href;
        if ($disabled) {
            $extraAttributes['aria-disabled'] = 'true';
        }
    } else {
        $extraAttributes['type'] = 'button';
        if ($disabled) {
            $extraAttributes['disabled'] = true;
        }
    }
@endphp

<{{ $tag }} {{ $attributes->merge($extraAttributes)->class(['dock-active' => $active]) }}>
    {{ $slot }}
    @if ($label)
        <span class="dock-label">{{ $label }}</span>
    @endif
    </{{ $tag }}>
