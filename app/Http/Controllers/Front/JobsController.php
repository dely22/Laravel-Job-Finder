<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    function index()
    {
        return view('front.jobs');
    }

    function details()
    {
        return view('front.details');
    }
}
