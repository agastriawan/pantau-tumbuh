<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('/admin/login');
});

Route::get('/register', function () {
    return view('/admin/register');
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
