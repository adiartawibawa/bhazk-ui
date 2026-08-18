@props([
    'title' => null, // opsional — judul kolom
])

<nav>
    @if ($title)
        <h6 class="footer-title">{{ $title }}</h6>
    @endif
    {{ $slot }}
</nav>
