<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    @vite('resources/js/app.js')
</head>

<body class="font-geist">
    <header class="font-bold">
        <h1>Header</h1>
    </header>

    <main class="font-light">
        {{ $slot }}
    </main>

    <footer class="font-poppins font-bold">
        <p>
            <small>Footer</small>
        </p>
    </footer>
</body>

</html>
