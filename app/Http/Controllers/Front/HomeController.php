<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view('front.index');
    }
    function aboutUs()
    {
        return view('front.about');
    }
    function ourServices()
    {
        return view('front.services');
    }
    function connectUs()
    {
        return view('front.connect');
    }
}
