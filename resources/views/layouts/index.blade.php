<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env("APP_NAME")}}</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <nav>
        <a href="{{route("home.index")}}">Home</a>
        <a href="{{route("images.index")}}">Image</a>
    </nav>
    @include("layouts.flash")
        @yield('content')
</body>
</html>
