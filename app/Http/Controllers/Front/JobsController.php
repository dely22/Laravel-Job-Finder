<?php

namespace App\Http\Controllers;


namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

class JobsController extends Controller
{
    //
    function index()
    {
        return view('jobs');
    }

    function details()
    {
        return view('details');
    }
}
