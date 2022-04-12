<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\AdsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\DashController;
use App\Http\Controllers\Admin\MessagesController;
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
    return view('admin.messages.listMessages');
});

// Route::group(['prefix'=>'users','middleware'=> 'auth'], function () {});

Route::namespace('Admin')->group(function () {

    // Messages ROUTES
    Route::get('/listMessages', [MessagesController::class, 'index'])->name('Messages');

    // JOBS ROUTES
    Route::get('/listJobs', [JobController::class, 'index'])->name('Jobs');
    Route::get('/addJob', [JobController::class, 'add'])->name('newJob');

    // COMPANIES ROUTES
    Route::get('/listCompany', [DashController::class, 'index'])->name('Companies');
    Route::get('/addCompany', [DashController::class, 'add'])->name('newCompany');

    // SERVICES ROUTES
    Route::get('/listServices', [ServicesController::class, 'index'])->name('Services');
    Route::get('/addService', [ServicesController::class, 'create'])->name('newService');
    Route::get('/edit_service/{serv_id}', [ServicesController::class, 'edit'])->name('edit_service');

    Route::get('/toggle_category/{serv_id}', [ServicesController::class, 'toggle'])->name('toggle_service');

    Route::post('/store_service', [ServicesController::class, 'store'])->name('store_service');
    Route::post('/update_service/{serv_id}', [ServicesController::class, 'update'])->name('update_service');




    // ABOUT US ROUTES
    Route::get('/listInfos', [AboutUsController::class, 'index'])->name('About');
    Route::get('/addInfos', [AboutUsController::class, 'add'])->name('newInfo');

    // ADS ROUTES
    Route::get('/listAds', [AdsController::class, 'index'])->name('Ads');
    Route::get('/addAds', [AdsController::class, 'add'])->name('newAds');
});
