<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @yield('styles')
</head>
<body>
    <nav>
        <h1>navbar</h1>
    </nav>
    <main>

        @yield('content')

    </main>
    <footer>
        <h1>Footer</h1>
    </footer>
</body>
</html>