<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body class="h-screen max-h-full max-w-full">
    <div class="w-screen bg-green-400 py-3">
        <a href="" class="flex items-center">
            <img src="{{ asset('images/parakeet_logo.svg') }}" alt="Parakeet" class="w-8 px-1">
            <p class="text-salsa text-red-400 text-4xl">Parakeet</p>
        </a>
    </div>
    @yield('content')
</body>
</html>