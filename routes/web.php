<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\UsermanagementController;
use App\Http\Controllers\ProfileController;

Route::get('dashboard', [DashboardController::class, 'index'])->name('umkm')->middleware('auth');

Route::prefix('auth')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('_register', [AuthController::class, '_register'])->name('_register');
    Route::post('_login', [AuthController::class, '_login'])->name('_login');
    Route::post('_logout', [AuthController::class, '_logout']);
});

Route::prefix('orangtua')->middleware('auth')->group(function () {
    Route::prefix('anak')->group(function () {
        Route::get('', [AnakController::class, 'anak'])->name('anak');
        Route::get('tambah_anak', [AnakController::class, 'tambah_anak'])->name('tambah_anak');
        Route::get('edit_anak/{id}', [AnakController::class, 'edit_anak'])->name('edit_anak');
        Route::post('_tambah_anak', [AnakController::class, '_tambah_anak'])->name('_tambah_anak');
        Route::post('_list_anak', [AnakController::class, '_list_anak'])->name('_list_anak');
        Route::post('_edit_anak', [AnakController::class, '_edit_anak'])->name('_edit_anak');
        Route::delete('_delete_anak/{id}', [AnakController::class, '_delete_anak'])->name('_delete_anak');
    });
});

Route::prefix('monitoring')->middleware('auth')->group(function () {
    Route::get('', [MonitoringController::class, 'monitoring'])->name('monitoring');
    Route::get('tambah_monitoring', [MonitoringController::class, 'tambah_monitoring'])->name('tambah_monitoring');
    Route::get('edit_monitoring/{id}', [MonitoringController::class, 'edit_monitoring'])->name('edit_monitoring');
    Route::post('_tambah_monitoring', [MonitoringController::class, '_tambah_monitoring'])->name('_tambah_monitoring');
    Route::post('_list_monitoring', [MonitoringController::class, '_list_monitoring'])->name('_list_monitoring');
    Route::post('_edit_monitoring', [MonitoringController::class, '_edit_monitoring'])->name('_edit_monitoring');
    Route::get('_export', [MonitoringController::class, '_export'])->name('_export');
    Route::delete('_delete_monitoring/{id}', [MonitoringController::class, '_delete_monitoring'])->name('_delete_monitoring');

    Route::prefix('feedback')->group(function () {
        Route::get('{id}', [FeedbackController::class, 'feedback'])->name('feedback');
        Route::post('_feedback', [FeedbackController::class, '_feedback'])->name('_feedback');
    });
});

Route::prefix('usermanagement')->middleware('auth')->group(function () {
    Route::get('', [UsermanagementController::class, 'usermanagement'])->name('usermanagement');
    Route::get('tambah_user', [UsermanagementController::class, 'tambah_user'])->name('tambah_user');
    Route::get('edit_user/{id}', [UsermanagementController::class, 'edit_user'])->name('edit_user');
    Route::post('_tambah_user', [UsermanagementController::class, '_tambah_user'])->name('_tambah_user');
    Route::post('_list_user', [UsermanagementController::class, '_list_user'])->name('_list_user');
    Route::post('_edit_user', [UsermanagementController::class, '_edit_user'])->name('_edit_user');
    Route::delete('_delete_user/{id}', [UsermanagementController::class, '_delete_user'])->name('_delete_user');
});

Route::prefix('profile')->middleware('auth')->group(function () {
    Route::get('', [ProfileController::class, 'profile'])->name('profile');
    Route::post('_edit_user', [ProfileController::class, '_edit_user'])->name('_edit_user');
    Route::post('_edit_password', [ProfileController::class, '_edit_password'])->name('_edit_password');
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