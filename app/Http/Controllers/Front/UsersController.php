<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    function login()
    {
        return view('login');
    }
    function register()
    {
        return view('front.login');
    }
    function profile()
    {
        return view('front.profile');
    }
    function member()
    {
        return view('front.member');
    }
}
