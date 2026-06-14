<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Blade lesson</title>
</head>
<body>
    <nav>
        Laravel Blade Template Lesson | <a href="/">Home</a> |
        <a href="/about">About</a>
        @yield('content')
    </nav>
</body>
</html>