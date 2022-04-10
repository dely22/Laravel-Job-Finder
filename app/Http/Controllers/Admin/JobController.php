<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobController extends Controller
{
    function index()
    {
        return view('admin.jobs.listJobs');
    }
    function add()
    {
        return view('admin.jobs.addJobs');
    }
}
