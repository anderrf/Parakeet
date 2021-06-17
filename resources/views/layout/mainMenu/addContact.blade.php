@extends('layout.base')

@section('references')
    <script src="{{ asset('js/addcontactForm.js') }}" defer></script>
@endsection

@section('content')
    <div class="w-full h-full flex items-center justify-center bg-gray-200 overflow-y-auto">
        <div class="w-1/2 bg-white rounded text-roboto p-5">
            <h2 class="text-3xl">Adicionar contato</h2>
            <hr class="my-2">
            <form action="" method="POST" class="w-full text-lg">
                <div class="w-full flex flex-col my-3">
                    <label for="txtCredentialSearch" id="lblCredentialSearch">Informe o e-mail do contato desejado:</label>
                    <input name="txtCredentialSearch" id="txtCredentialSearch" class="border border-green-600 px-1">
                </div>
                <div class="w-full flex flex-col my-3">
                    <p>Procurar por:</p>
                    <div class="w-1/2 flex justify-center items-center mx-auto my-3">
                        <button type="button" id="btnEmailSearch" class="w-full rounded-l-lg">E-mail</button>
                        <button type="button" id="btnIdSearch" class="w-full rounded-r-lg">Id</button>
                    </div>
                    <input type="hidden" name="credentialSearchType">
                </div>
                <div class="h-full flex justify-between my-3">
                    <button type="reset" class="bg-red-500 hover:bg-red-400 w-4/12 h-10 text-center rounded-full flex items-center justify-center text-white text-xl" id="btnCancelAddContact">Cancelar</button>
                    <button type="submit" class="bg-green-300 hover:bg-green-400 w-4/12 h-10 text-center rounded-full flex items-center justify-center text-white text-xl" id="btnNewContact">Salvar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
