@extends('layout.base')

@section('references')
    <script src="{{ asset('js/profileForm.js') }}" defer></script>
@endsection

@section('content')
    <div class="w-full h-full flex items-center justify-center bg-gray-200 overflow-y-auto">
        <div class="w-1/2 bg-white rounded text-roboto p-5">
            <div class="w-full flex justify-between items-center">
                <h2 class="text-3xl">Seu perfil - <small class="text-salsa">id: 00000001</small></h2>
                <button type="button" class="rounded-full h-12 w-12 hover:bg-green-100 flex items-center justify-center" id="btnEditProfile">
                    <img src="{{ asset('images/pencil_black.svg') }}" alt="">
                </button>
            </div>
            <hr class="my-2">
            <form action="" method="POST" class="w-full grid grid-cols-2">
                <div class="flex flex-col items-center justify-between">
                    <img src="{{ asset('images/parakeet_logo.svg') }}" alt="" class="rounded bg-gray-100 w-48 h-48 mt-3">
                    <label for="profileImg" class="bg-red-200 hover:bg-red-300 relative cursor-pointer flex items-center justify-center w-48 h-12 rounded-full text-xl mb-3 showEdit">
                        <input type="file" name="profileImg" id="profileImg" class="absolute" style="top: -1000px">
                        <span>Selecione uma foto</span>
                    </label>
                </div>
                <div class="text-lg">
                    <div class="w-full flex flex-col my-1">
                        <label for="profileName">Nome</label>
                        <input type="text" name="profileName" id="profileName" class="border border-green-200 px-1">
                    </div>
                    <div class="w-full flex flex-col my-1">
                        <label for="profileEmail">E-mail</label>
                        <input type="email" name="profileEmail" id="profileEmail" class="border border-green-200 px-1">
                    </div>
                    <div class="w-full flex flex-col my-1">
                        <label for="profileNewPassword">Senha</label>
                        <input type="password" name="profileNewPassword" id="profileNewPassword" class="border border-green-200 px-1">
                    </div>
                    <div class="w-full flex flex-col my-1 showEdit">
                        <label for="profileOldPassword">Confirme as alterações com a senha antiga</label>
                        <input type="password" name="profileOldPassword" id="profileOldPassword" class="border border-green-200 px-1">
                    </div>
                    <div class="w-full flex justify-between my-3 showEdit">
                        <button type="reset" class="bg-red-500 hover:bg-red-400 w-4/12 h-10 text-center rounded-full flex items-center justify-center text-white text-xl" id="btnCancelProfileEdit">Cancelar</button>
                        <button type="submit" class="bg-green-300 hover:bg-green-400 w-4/12 h-10 text-center rounded-full flex items-center justify-center text-white text-xl" id="btnSaveProfileEdit">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection