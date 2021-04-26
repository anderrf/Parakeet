@extends('layout.base')

@section('content')
    <div class="flex flex-col justify-center items-center w-full h-full max-h-full max-w-full text-roboto bg-red-200">
        <div class="bg-gray-200 w-6/12 rounded-xl">
            <form action="" method="POST" class="flex flex-col gap-y-5 m-8 text-lg">
                <fieldset>
                    <legend class="text-center text-green-500 text-3xl">Entre!</legend>
                </fieldset>
                <div class="w-full flex flex-col">
                    <label for="loginEmail">E-mail</label>
                    <input type="email" name="loginEmail" id="loginEmail">
                </div>
                <div class="w-full flex flex-col">
                    <label for="loginPassword">Senha</label>
                    <input type="password" name="loginPassword" id="loginPassword">
                </div>
                <div class="w-full flex justify-between">
                <a href="/" class="bg-red-500 w-4/12 h-10 text-center rounded-full flex items-center justify-center text-white text-xl">Voltar</a>
                    <button type="submit" class="bg-green-300 w-4/12 h-10 text-center rounded-full flex items-center justify-center text-white text-xl">Entrar</button>
                </div>
            </form>
        </div>
    </div>
@endsection