<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Front;
// namespace App\Http\Controllers\Front;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    //
    function index()
    {
        return view('companies');
    }
}
