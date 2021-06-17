<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset('images/parakeet_logo.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @yield('references')
</head>
<body class="h-screen max-w-full overflow-hidden overflow-y-auto">
    <div class="w-screen bg-green-400 p-1 flex justify-between items-center h-20">
        <a href="/" class="flex items-center w-2/12">
            <img src="{{ asset('images/parakeet_logo.svg') }}" alt="Parakeet" class="w-8 px-1">
            <p class="text-salsa text-red-400 text-4xl">Parakeet</p>
        </a>
        <div class="w-3/12 h-full flex items-center gap-x-4">
            <a href="/adicionar-contato" class=" w-10 h-10 flex justify-center items-center rounded-full hover:bg-green-100">
                <img src="{{ asset('images/add_person_white.svg') }}" alt="" class="w-6 m-auto">
            </a>
            <a href="/adicionar-grupo" class=" w-10 h-10 flex justify-center items-center rounded-full hover:bg-green-100">
                <img src="{{ asset('images/add_group_white.svg') }}" alt="" class="w-6 m-auto">
            </a>
            <a href="/perfil" class="flex items-center gap-x-2 h-full w-5/6 hover:bg-green-100 px-1 rounded">
                <img src="{{ asset('images/parakeet_logo.svg') }}" alt="" class="bg-white rounded-full w-10 h-10">
                <p class="text-salsa">Nome</p>
            </a>
        </div>
    </div>
    @yield('content')
</body>
</html>
