<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
    @Vite('resources/js/app.js')

</head>
<header>
    @include('components.header')
</header>
<body>
    @yield('contents')
</body>
</html>