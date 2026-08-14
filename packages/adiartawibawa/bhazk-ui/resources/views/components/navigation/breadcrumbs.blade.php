@props([])

{{-- <nav> + aria-label untuk aksesibilitas, sesuai praktik terbaik meski
     DaisyUI sendiri contohkan cukup <div> --}}
<nav aria-label="breadcrumbs" {{ $attributes->class(['breadcrumbs']) }}>
    <ul>
        {{ $slot }}
    </ul>
</nav>
