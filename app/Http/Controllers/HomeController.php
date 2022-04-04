<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index()
    {
        return view('index');
    }
    function aboutUs()
    {
        return view('about');
    }
    function ourServices()
    {
        return view('services');
    }
    function connectUs()
    {
        return view('connect');
    }
}
