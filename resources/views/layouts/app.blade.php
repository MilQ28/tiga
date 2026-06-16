<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div>
        @extends('components.header')
    </div>

    <main class="pt-18 min-h-screen">
        @yield('content')
    </main>

    <div>
        @extends('components.footer')
    </div>
</body>
</html>