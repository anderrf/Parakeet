<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function(){
    return view('layout.logForm.landing');
});

Route::get('/login', 'App\Http\Controllers\UserController@logUser')->name('logUser');

Route::get('/cadastro', 'App\Http\Controllers\UserController@registerUser')->name('registerUser');

Route::get('/chats', function(){
    return view('layout.mainMenu.chat.openChat');
});

Route::get('/perfil', 'App\Http\Controllers\UserController@viewProfile')->name('viewProfile');

Route::get('/adicionar-contato', function(){
    return view('layout.mainMenu.addContact');
});