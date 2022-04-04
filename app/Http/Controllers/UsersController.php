<?php

namespace App\Http\Controllers;

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
    function {{route('member')}}s()
    {
        return view('{{route('member')}}');
    }
}
