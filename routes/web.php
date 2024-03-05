<?php

use App\Http\Controllers\KajianController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserManagement\Admin\AdminController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::controller(KajianController::class)->group(function () {
    Route::get('/data_kajian', 'data_kajian')->name('data_kajian');
});


/**
 * Middleware 'auth' digunakan untuk membatasi akses ke halaman tertentu
 * Hanya bisa diakses oleh user yang sudah login
 */
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /**
     * Admin middleware
     * Hanya bisa diakses oleh admin
     * 
     * 
     * Referensi:
     * app/Http/Middleware/UserManagement/Admin.php
     * app/Http/Controllers/UserManagement/Admin/AdminController.php
     */
    Route::middleware('admin')->group(function () {
        Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
        

        Route::get('admin/data_user', [AdminController::class, 'show_data_user'])->name('admin.show_data_user');
        Route::get('admin/history_login', [AdminController::class, 'show_history_login'])->name('admin.show_history_login');
        Route::get('admin/history_upload', [AdminController::class, 'show_history_upload'])->name('admin.show_history_upload');


    });
});

require __DIR__.'/auth.php';
