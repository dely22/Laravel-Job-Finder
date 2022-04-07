<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashController extends Controller
{
    function index()
    {
        return view('admin.companies.listCompanies');
    }
    function add()
    {
        return view('admin.companies.addCompanies');
    }





    //
}
