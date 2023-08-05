<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kyiv | {{ $title }}</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('components.navbar')
    <main class="container mx-auto lg:text-xl border-x border-customBlack">
        @yield('main')
    </main>
    @include('components.footer')
</body>

</html>
