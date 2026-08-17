@props([])

<script src="{{ asset('vendor/bhazk-ui/bhazk-ui.js') }}" defer></script>
@if (file_exists(public_path('vendor/bhazk-ui/bhazk-ui.css')))
    <link rel="stylesheet" href="{{ asset('vendor/bhazk-ui/bhazk-ui.css') }}">
@endif
