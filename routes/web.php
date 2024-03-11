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

Route::get('/sign_in_user', function () {
    return view('auth/sign_in_user');
});

Route::get('/sign_in_admin', function () {
    return view('admin/signin_admin');
});

Route::get('/sign_up', function () {
    return view('auth/sign_up');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::controller(KajianController::class)->group(function () {
    Route::get('/data_kajian', 'index')->name('data_kajian');
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
        Route::get('admin', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
        
        // User
        Route::get('admin/users', [AdminController::class, 'show_data_user'])->name('admin.show_data_user');
        Route::get('admin/users/{id}', [AdminController::class, 'show_detail_user'])->name('admin.show_detail_user');
        Route::get('admin/users/{id}/edit', [AdminController::class, 'edit_user'])->name('admin.edit_user');
        Route::put('admin/users/{id}', [AdminController::class, 'update_user'])->name('admin.update_user');
        Route::delete('admin/users/{id}', [AdminController::class, 'delete_user'])->name('admin.delete_user');
        
        Route::get('admin/history_login', [AdminController::class, 'show_history_login'])->name('admin.show_history_login');
        Route::get('admin/history_upload', [AdminController::class, 'show_history_upload'])->name('admin.show_history_upload');
        Route::get('admin/history_download', [AdminController::class, 'show_history_download'])->name('admin.show_history_download');

        // Kajian
        Route::get('admin/kajian', [KajianController::class, 'index'])->name('admin.kajian.index');
        Route::get('admin/kajian/create', [KajianController::class, 'create'])->name('admin.kajian.create');
        Route::post('admin/kajian', [KajianController::class, 'store'])->name('admin.kajian.store');
        Route::delete('admin/kajian/{id}', [KajianController::class, 'destroy'])->name('admin.kajian.destroy');
        Route::get('admin/kajian/{id}', [KajianController::class, 'show'])->name('admin.kajian.show');
        Route::get('admin/kajian/{id}/edit', [KajianController::class, 'edit'])->name('admin.kajian.edit');
        Route::put('admin/kajian/{id}', [KajianController::class, 'update'])->name('admin.kajian.update');

    });
});

require __DIR__ . '/auth.php';
