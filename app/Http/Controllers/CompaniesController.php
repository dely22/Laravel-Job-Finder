<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    //
    function index()
    {
        return view('companies');
    }
}
