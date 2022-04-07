<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    function index()
    {
        return view('admin.services.listServices');
    }
    function add()
    {
        return view('admin.services.addService');
    }
}
