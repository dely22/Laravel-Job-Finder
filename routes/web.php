<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('/services', [HomeController::class, 'ourServices'])->name('ourServices');
Route::get('/connect', [HomeController::class, 'connectUs'])->name('connectUs');

Route::get('/jobs', [JobsController::class, 'index'])->name('jobs');
Route::get('/details', [JobsController::class, 'details'])->name('details');

// Route::get('/login', [UsersController::class, 'login'])->name('login');
// Route::get('/register', [UsersController::class, 'register'])->name('register');
Route::get('/profile', [UsersController::class, 'profile'])->name('profile');
Route::get('/member', [UsersController::class, 'member'])->name('member');

Route::get('/companies', [CompaniesController::class, 'index'])->name('companies');
