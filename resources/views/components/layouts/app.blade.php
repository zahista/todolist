<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-zinc-100">
    <main class="container mx-auto bg-white p-16 rounded-xl mt-16">
        {{ $slot }}
    </main>
</body>
</html>

