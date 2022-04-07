<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    function index()
    {
        return view('admin.about.listInfos');
    }
    function add()
    {
        return view('admin.about.addInfos');
    }
}
