   {{-- /*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

// Route::get('/admin', function () {
//     return view('dashboard');
// });

// Route::namespace('Admin')->group(function () {

//     Route::get('/admin', [JobController::class, 'index'])->name('Jobs');
//     Route::get('/addJob', [JobController::class, 'add'])->name('addJob');

//     Route::get('/listCompany', [DashController::class, 'index'])->name('Companies');
//     Route::get('/addCompany', [DashController::class, 'add'])->name('addCompany');

//     Route::get('/listServices', [ServicesController::class, 'index'])->name('Services');
//     Route::get('/addService', [ServicesController::class, 'add'])->name('addService');
// }); --}}


   @extends('layouts.master')

    @section('content')

    @stop
