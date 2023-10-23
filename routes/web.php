<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::controller(Controller::class)->group(function () {
    Route::get('index', 'home')->name('index');
    Route::get('diklat', 'diklat')->name('diklat');
    Route::get('diklat/detail', 'detail')->name('diklat.detail');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('diklat/content', 'content')->name('diklat.content');
});

Route::prefix('admin')->group(function () {

Route::controller(AdminController::class)->group(function () {
    Route::get('/','index')->name('admin');
    Route::get('dashboard', 'index')->name('admin.dashboard');
    Route::get('diklat', 'diklat')->name('admin.diklat');
    Route::get('diklat/daftar', 'daftardiklat')->name('admin.diklat.daftar');
    Route::get('diklat/daftar/content', 'content')->name('admin.diklat.content');
});

});
