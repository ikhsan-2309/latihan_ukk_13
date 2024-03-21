<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\{
    PelangganController,
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::group(['middleware' => 'auth'], function () {

    Route::group(['middleware' => 'level:admin'], function () {
        // Routes accessible for users with level 1
    });

    Route::group(['middleware' => 'level:admin,kasir'], function () {
        Route::get('/home', [LoginController::class, 'home'])->name('home');
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
        Route::resource('pelanggan', PelangganController::class);
    });

    // Additional route groups for other levels as needed
});
