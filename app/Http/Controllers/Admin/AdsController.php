<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    function index()
    {
        return view('admin.ads.listAds');
    }
    function add()
    {
        return view('admin.ads.addAds');
    }
}
