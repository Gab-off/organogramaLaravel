<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'Organograma SEINFRA')</title>

    {{-- Tailwind CSS via Vite --}}
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

<div id="app">
    @include('partials.novo-header')

    <main class="container mx-auto mt-8 px-4">
        @yield('content')
    </main>
</div>

</body>
</html>
