@extends('layout.base')

@section('content')
    <div class="flex flex-col justify-center items-center w-full h-full max-h-full max-w-full text-roboto bg-red-200">
        <div class="bg-gray-200 w-6/12 rounded-xl">
            <form action="" method="POST" class="flex flex-col gap-y-5 m-8 text-lg">
                <fieldset>
                    <legend class="text-center text-green-500 text-3xl">Cadastre-se!</legend>
                </fieldset>
                <div class="w-full flex flex-col">
                    <label for="registerName">Nome</label>
                    <input type="text" name="registerName" id="registerName">
                </div>
                <div class="w-full flex flex-col">
                    <label for="registerEmail">E-mail</label>
                    <input type="email" name="registerEmail" id="registerEmail">
                </div>
                <div class="w-full flex flex-col">
                    <label for="registerPassword">Senha</label>
                    <input type="password" name="registerPassword" id="registerPassword">
                </div>
                <div class="w-full flex flex-col">
                    <label for="registerConfirmPassword">Confirme a senha</label>
                    <input type="password" name="registerConfirmPassword" id="registerConfirmPassword">
                </div>
                <div class="w-full flex justify-between">
                <a href="/" class="bg-red-500 w-4/12 h-10 text-center rounded-full flex items-center justify-center text-white text-xl">Cancelar</a>
                    <button type="submit" class="bg-green-300 w-4/12 h-10 text-center rounded-full flex items-center justify-center text-white text-xl">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
@endsection