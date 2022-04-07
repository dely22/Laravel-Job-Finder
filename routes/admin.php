<?php

use App\Http\Controllers\Admin\AdsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\DashController;
use App\Http\Controllers\Admin\ServicesController;


/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::get('/admin', function () {
    return view('index');
});

Route::namespace('Admin')->group(function () {

    // JOBS ROUTES
    Route::get('/admin', [JobController::class, 'index'])->name('Jobs');
    Route::get('/addJob', [JobController::class, 'add'])->name('newJob');

    // COMPANIES ROUTES
    Route::get('/listCompany', [DashController::class, 'index'])->name('Companies');
    Route::get('/addCompany', [DashController::class, 'add'])->name('newCompany');

    // SERVICES ROUTES
    Route::get('/listServices', [ServicesController::class, 'index'])->name('Services');
    Route::get('/addService', [ServicesController::class, 'add'])->name('newService');

    // ADS ROUTES
    Route::get('/listAds', [AdsController::class, 'index'])->name('Ads');
    Route::get('/addAds', [AdsController::class, 'add'])->name('newAds');

    //    ROUTES
});
