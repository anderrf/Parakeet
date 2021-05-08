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

Route::get('/login', function(){
    return view('layout.logForm.login');
});

Route::get('/cadastro', function(){
    return view('layout.logForm.register');
});

Route::get('/chats', function(){
    return view('layout.mainMenu.chat.openChat');
});