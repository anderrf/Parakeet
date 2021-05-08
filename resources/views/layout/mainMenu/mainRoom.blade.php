@extends('layout.base')

@section('content')
    <div class="w-full flex h-full">
        <div class="w-3/12 bg-green-100 text-roboto overflow-y-scroll">
            <form action="" method="POST" class="py-2 px-auto flex items-center justify-center h-20">
                <div class="rounded-full h-1/2 flex justify-center w-5/6">
                    <input type="text" name="searchContact" id="searchContact" class="rounded-l-lg h-full w-9/12 text-roboto px-1" placeholder="Pesquise contatos">
                    <button class="rounded-r-lg bg-red-600 w-3/12 h-full" type="submit">P</button>
                </div>
            </form>
            <a href="" class="p-2 flex items-center hover:bg-green-200">
                <div class="w-3/12 flex items-start">
                    <img src="{{ asset('images/parakeet_logo.svg') }}" alt="" class="bg-white rounded-full w-12 h-12">
                </div>
                <p class="w-6/12 text-left">Nome</p>
                <div class="w-3/12 flex justify-end">
                    <div class="bg-green-500 rounded-full w-3 h-3"></div>
                </div>
            </a>
            
            <a href="" class="p-2 flex items-center hover:bg-green-300">
                <div class="w-3/12 flex items-start">
                    <img src="{{ asset('images/parakeet_logo.svg') }}" alt="" class="bg-white rounded-full w-12 h-12">
                </div>
                <p class="w-6/12 text-left">Nome</p>
                <div class="w-3/12 flex justify-end">
                    <div class="bg-green-500 rounded-full w-3 h-3"></div>
                </div>
            </a>
        </div>
        {{--
            <div class="w-9/12 bg-white flex justify-center items-center">
                <h2 class="text-roboto">Selecione um contato ao lado para conversar!</h2>
            </div>
        --}}
        <div class="w-full h-full">
            @yield('chats')
        </div>
    </div>
@endsection