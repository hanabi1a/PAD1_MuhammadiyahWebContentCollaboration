<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController1;
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
Route::get('/kajian2', function () {
    return view('kajian2');
});
Route::get('/layout_user_2', function () {
    return view('layout_user_2');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::group([], function () {
    // Route::get('/', [HomeController::class, 'index']);
    Route::get('/beranda', [HomeController::class, 'index'])->name('home');
    // Route::get('/beranda1', [HomeController1::class, 'index'])->name('home');
    Route::get('/about', [AboutController::class, 'index'])->name('about');

    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::get('/register/{page}', [RegisteredUserController::class, 'create'])->name('register.show');
    Route::post('/register/1', [RegisteredUserController::class, 'store'])->name('register.step1');
    Route::post('/register/2', [RegisteredUserController::class, 'store_additional_1'])->name('register.step2');
    Route::post('/register/3', [RegisteredUserController::class, 'store_additional_2'])->name('register.step3');
    Route::post('/register/4', [RegisteredUserController::class, 'store_additional_3'])->name('register.step4');
});


/**
 * Middleware 'auth' digunakan untuk membatasi akses ke halaman tertentu
 * Hanya bisa diakses oleh user yang sudah login
 */
Route::middleware('auth')->group(function () {
    // Breeze
    Route::get('/profileb', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profileb', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profileb', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // Start

    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');



    /**
     * Registered middleware
     * Hanya bisa diakses oleh admin dan registered user
     * 
     * 
     * Referensi:
     * app/Http/Middleware/UserManagement/
     * app/Http/Controllers/UserManagement/
     */

    Route::middleware('registered')->group(function () {
        Route::get('/kajian/create', [KajianController::class, 'create'])->name('kajian.create');
        Route::post('/kajian', [KajianController::class, 'store'])->name('kajian.store');
        Route::get('/profile', [ProfileController::class, 'show_profile'])->name('profile.show');
        Route::get('/profile/edit', [ProfileController::class, 'edit_profile'])->name('profile.edit_profile');
        Route::put('/profile', [ProfileController::class, 'store_edit_profile'])->name('profile.store');
        Route::delete('/kajian/{id}', [KajianController::class, 'destroy'])->name('kajian.destroy');



    });

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
Route::controller(KajianController::class)->group(function () {
    Route::get('/data_kajian', 'index')->name('data_kajian');
    Route::get('/kajian', 'show_kajian')->name('kajian.show');
    Route::get('/kajian/{id}', 'show')->name('kajian.detail');
    Route::get('/kajian/{id}/create_new', 'edit')->name('kajian.edit.new_version');
    Route::get('/kajian/download/{id}', 'downloadKajian')->name('kajian.download');

});

require __DIR__ . '/auth.php';
