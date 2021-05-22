<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{
    public static function registerUser()
    {
        return view('layout.logForm.register');
    }

    public static function logUser()
    {
        return view('layout.logForm.login');
    }

    public static function viewProfile()
    {
        return view('layout.mainMenu.profile');
    }
}
