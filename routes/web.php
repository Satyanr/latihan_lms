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
    return redirect()->route('index');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/home', function(){
//     return redirect()->route('index');
// });

Route::controller(Controller::class)->group(function () {
    Route::get('index', 'home')->name('index');
    Route::get('diklat', 'diklat')->name('diklat');
    Route::get('diklat/{id}/detail', 'detail')->name('diklat.detail');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('diklat/content/{id}', 'content')->name('diklat.content');
});

Route::prefix('admin')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/', 'index')->name('admin');
        Route::get('dashboard', 'index')->name('admin.dashboard');
        Route::get('diklat', 'diklat')->name('admin.diklat');
        Route::get('category', 'category')->name('admin.category');

        Route::prefix('diklat')->group(function () {
            Route::get('daftar', 'daftardiklat')->name('admin.diklat.daftar');

            Route::prefix('daftar')->group(function () {
                Route::get('content/{id}', 'content')->name('admin.diklat.content');

                Route::prefix('content')->group(function(){
                    Route::get('bahanbacaan/{id}','bahanbacaan')->name('admin.diklat.content.bahanbacaan');
                    Route::get('video/{id}','video')->name('admin.diklat.content.video');
                    Route::get('quizz/{id}','quizz')->name('admin.diklat.content.quizz');
                });

            });

        });
    });
});
