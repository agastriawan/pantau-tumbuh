<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::prefix('auth')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('_register', [AuthController::class, '_register'])->name('_register');
    Route::post('_login', [AuthController::class, '_login'])->name('_login');
    Route::post('_logout', [AuthController::class, '_logout']);
});

Route::get('/', function () {
    return view('index');
});
Route::get('/tentang-kami', function () {
    return view('about');
});

Route::get('/kontak', function () {
    return view('contact');
});

Route::get('/artikel', function () {
    return view('artikel');
});

Route::get('/artikel-detail', function () {
    return view('artikel-detail');
});


Route::get('/dashboard', function () {
    return view('admin/dashboard');
});

Route::get('/profile', function () {
    return view('admin/profile');
});

Route::get('/orangtua/monitoring', function () {
    return view('admin/orangtua/list');
});


Route::get('/orangtua/monitoring/add', function () {
    return view('admin/orangtua/add');
});
