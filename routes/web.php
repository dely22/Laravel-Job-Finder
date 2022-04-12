<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Front;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\CompaniesController;
use App\Http\Controllers\Front\JobsController;
use App\Http\Controllers\Front\UsersController;

// admin
use App\Http\Controllers\Admin\DashController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\ServicesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::namespace('Front')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [HomeController::class, 'aboutUs'])->name('aboutUs');
    Route::get('/services', [HomeController::class, 'ourServices'])->name('ourServices');
    Route::get('/connect', [HomeController::class, 'connectUs'])->name('connectUs');
    Route::get('/jobs', [JobsController::class, 'index'])->name('jobs');
    Route::get('/details', [JobsController::class, 'details'])->name('details');
    Route::get('/companies', [CompaniesController::class, 'index'])->name('companies');

    Route::get('/profile', [UsersController::class, 'profile'])->name('profile');
    Route::get('/member', [UsersController::class, 'member'])->name('member');

    Route::get('/login', [UsersController::class, 'login'])->name('login');
    Route::get('/register', [UsersController::class, 'register'])->name('register');
});

Route::namespace('Admin')->group(function () {

    Route::get('/services', [ServicesController::class, 'ourServices'])->name('ourServices');
});
