@props([])

<!DOCTYPE html>
<html lang="id" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview</title>
    <x-layouts.bhazk-ui-scripts />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-base-100">
    {{ $slot }}
</body>

</html>
