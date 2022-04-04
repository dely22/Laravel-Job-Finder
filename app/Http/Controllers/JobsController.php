<?php

namespace App\Http\Controllers;

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
