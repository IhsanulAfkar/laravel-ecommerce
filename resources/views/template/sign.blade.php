<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="fixed overflow-hidden w-full h-full bg-[#CED2DA]">
        <div
            class="absolute w-[95%] max-w-[500px] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white border border-customBlack p-8">
            @yield('main')
        </div>
    </div>
</body>

</html>
