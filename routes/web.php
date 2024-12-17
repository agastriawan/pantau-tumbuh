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


Route::get('/dashboard', function () {
    return view('admin/index');
});
