@extends('layout.mainMenu.mainRoom')

@section('chats')
    <div class="bg-white w-full h-4/5 overflow-y-scroll text-roboto p-2 flex flex-col gap-y-4">
        <div class="max-w-2xl bg-gray-100 p-2 rounded self-start">
            <p class="text-left">EAE</p>
        </div>
        <div class="max-w-2xl bg-green-100 p-2 rounded self-end">
            <p class="text-right">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur sequi, numquam reprehenderit deleniti fuga ratione quibusdam debitis in laborum ullam?</p>
        </div>
    </div>
    <div class="w-full bg-red-100 h-1/5 relative inset-x-0 bottom-0">
        <form action="" method="POST" class="h-1/2 flex items-center justify-center w-full text-roboto">
            <div class="rounded-full h-1/2 flex justify-center w-3/4">
                <input type="text" name="messageText" id="messageText" class="rounded-l-lg h-full w-11/12 text-roboto px-1" placeholder="Digite sua mensagem">
                <button class="rounded-r-lg bg-red-600 w-1/12" type="submit" id="btnSendMessage">Enviar</button>
            </div>
            
        </form>
    </div>
@endsection