<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    function login()
    {
        return view('login');
    }
    function register()
    {
        return view('singin');
    }
    function profile()
    {
        return view('profile');
    }
    function member()
    {
        return view('member');
    }
}
