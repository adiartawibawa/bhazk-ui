@props([
    'aspect' => 'aspect-16/9', // token Tailwind literal, ditulis langsung oleh consumer
])

{{-- Murni CSS (resize + overflow), tanpa JS/Alpine sama sekali —
     didukung Chrome 105+, Firefox 110+, Safari 16+ --}}
<figure tabindex="0" {{ $attributes->class(['diff', $aspect]) }}>
    <div class="diff-item-1" role="img" tabindex="0">{{ $before }}</div>
    <div class="diff-item-2" role="img">{{ $after }}</div>
    <div class="diff-resizer"></div>
</figure>
