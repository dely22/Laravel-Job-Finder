<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CompaniesController;

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
Route::get('/about', [HomeController::class, 'aboutUs'])->name('about');
Route::get('/services', [HomeController::class, 'ourServices'])->name('services');
Route::get('/connect', [HomeController::class, 'connectUs'])->name('connect');

Route::get('/jobs', [JobsController::class, 'index'])->name('jobs');
Route::get('/job/details', [JobsController::class, 'details'])->name('details');

Route::get('/login', [UsersController::class, 'login'])->name('login');
Route::get('/register', [UsersController::class, 'register'])->name('register');
Route::get('/profile', [UsersController::class, 'profile'])->name('profile');
Route::get('/member', [UsersController::class, 'members'])->name('member');
Route::get('/companies', [CompaniesController::class, 'index'])->name('companies');
