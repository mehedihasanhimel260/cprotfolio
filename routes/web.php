<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('/admin', function () {
    return view('backend.layout');
});
Route::get('/', function () {
    return view('frontend.layout');
});

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::middleware(['auth', 'user-access:admin'])->group(function () {
        Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
        Route::resource('/admin/category', CategoryController::class);
    });

    Route::middleware(['auth', 'user-access:user'])->group(function () {
        Route::get('/home', [HomeController::class, 'index'])->name('home');
    });
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
