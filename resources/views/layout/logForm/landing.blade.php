@extends('layout.base')

@section('content')
    <div class="flex justify-center w-full h-full max-h-full max-w-full">
        <div id="details" class="w-full bg-green-100 text-center flex flex-col items-center justify-center">
            <h1 class="text-salsa text-8xl text-red-400">Parakeet</h1>
            <p class="text-roboto text-xl">Conversas ágeis e sem limites!</p>
        </div>
        <div id="enter" class="w-full bg-red-100 flex flex-col gap-y-8 items-center justify-center text-roboto">
            <a href="/login" class="bg-green-300 w-6/12 h-16 text-center rounded-full flex items-center justify-center text-white text-xl">Entrar</a>
            <a href="/cadastro" class="bg-green-500 w-6/12 h-16 text-center rounded-full flex items-center justify-center text-white text-xl">Cadastre-se</a>
        </div>
    </div>
@endsection