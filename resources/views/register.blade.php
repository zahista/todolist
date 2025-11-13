<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-zinc-50 flex items-center justify-center h-screen">
    
    <form method="POST" class="w-1/3 px-16 p-4 mx-auto rounded-lg bg-white border border-zinc-100 space-y-6" action="/register">
        @csrf
        <h1 class="text-xl font-semibold">Zaregistrujte se</h1>
        <x-input type="text" placeholder="John Doe" name="name" />

        <x-input type="email" placeholder="email@email.cz" name="email" />
        <x-input type="password" name="password" />

        <x-button class="w-full" type="submit" class="my-8">Registrovat se</x-button>
    </form>
    

</body>
</html>