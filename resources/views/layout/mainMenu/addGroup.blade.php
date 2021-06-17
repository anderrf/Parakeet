@extends('layout.base')

@section('references')
    <script src="{{ asset('js/addGroupForm.js') }}" defer></script>
@endsection

@section('content')
    <div class="w-full min-h-full bg-gray-200 overflow-y-auto">
        <div class="w-1/2 bg-white rounded text-roboto p-5 my-12 mx-auto">
            <h2 class="text-3xl">Criar grupo</h2>
            <hr class="my-2">
            <form action="" method="POST" class="w-full text-lg">
                <div class="grid grid-cols-2 w-full">
                    <div class="w-full flex flex-col my-3 justify-center">
                        <label for="txtNewGroup">Digite o nome do novo grupo:</label>
                        <input name="txtNewGroup" id="txtNewGroup" class="border border-green-600 px-1">
                    </div>
                    <div class="w-full flex flex-col my-3 items-center justify-between h-72">
                        <img src="{{ asset('images/parakeet_logo.svg') }}" alt="" class="rounded bg-gray-100 w-48 h-48 mt-3">
                        <label for="newGroupImg" class="bg-red-200 hover:bg-red-300 relative cursor-pointer flex items-center justify-center w-48 h-12 rounded-full text-xl mb-3 showEdit">
                            <input type="file" name="newGroupImg" id="newGroupImg" class="absolute" style="top: -1000px">
                            <span>Selecione uma foto</span>
                        </label>
                    </div>
                </div>
                <fieldset>
                    <legend>Selecione os contatos</legend>
                    <div class="w-full flex flex-col my-3 max-h-48 overflow-y-auto" id="addGroupContactList">
                        <div class="w-full flex items-center justify-start hover:bg-green-100 py-2 pl-1 cursor-pointer">
                            <img src="{{ asset('images/parakeet_logo.svg') }}" alt="" class="bg-white rounded-full w-10 h-10">
                            <p class="w-6/12 text-left ml-3">Nome</p>
                        </div>
                        <div class="w-full flex items-center justify-start hover:bg-green-100 py-2 pl-1 cursor-pointer">
                            <img src="{{ asset('images/parakeet_logo.svg') }}" alt="" class="bg-white rounded-full w-10 h-10">
                            <p class="w-6/12 text-left ml-3">Nome</p>
                        </div>
                        <div class="w-full flex items-center justify-start hover:bg-green-100 py-2 pl-1 cursor-pointer">
                            <img src="{{ asset('images/parakeet_logo.svg') }}" alt="" class="bg-white rounded-full w-10 h-10">
                            <p class="w-6/12 text-left ml-3">Nome</p>
                        </div>
                        <div class="w-full flex items-center justify-start hover:bg-green-100 py-2 pl-1 cursor-pointer">
                            <img src="{{ asset('images/parakeet_logo.svg') }}" alt="" class="bg-white rounded-full w-10 h-10">
                            <p class="w-6/12 text-left ml-3">Nome</p>
                        </div>
                        <div class="w-full flex items-center justify-start hover:bg-green-100 py-2 pl-1 cursor-pointer">
                            <img src="{{ asset('images/parakeet_logo.svg') }}" alt="" class="bg-white rounded-full w-10 h-10">
                            <p class="w-6/12 text-left ml-3">Nome</p>
                        </div>
                    </div>
                </fieldset>
                <div class="h-full flex justify-between my-3">
                    <button type="reset" class="bg-red-500 hover:bg-red-400 w-4/12 h-10 text-center rounded-full flex items-center justify-center text-white text-xl" id="btnCancelAddGroup">Cancelar</button>
                    <button type="submit" class="bg-green-300 hover:bg-green-400 w-4/12 h-10 text-center rounded-full flex items-center justify-center text-white text-xl" id="btnNewGroup">Criar grupo</button>
                </div>
            </form>
        </div>
    </div>
@endsection
