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

// Route::get('/', function () {
//     return view('home.homepage');
// });
// Route::get('/kajian2', function () {
//     return view('kajian2');
// });
// Route::get('/layout_user_2', function () {
//     return view('layout_user_2');
// });

// Route::get('/form_create_user', function () {
//     return view('kajian.write.form_create_user');
// });
Route::get('/akun_muhammadiyah', function () {
    return view('profile.profile_akun_muhammadiyah');
});
Route::get('/akun_muhammadiyah', function () {
    return view('profile.profile_akun_muhammadiyah');
});
Route::get('/akun_pengguna', function () {
    return view('profile.profile_akun_pengguna');
});
// Route::get('/form_create_user_nv', function () {
//     return view('kajian.write.form_create_user_nv');
// });
// Route::get('/detail_kajian_asli_user', function () {
//     return view('kajian.read.detail_kajian_asli_user_UI');
// });
// Route::get('/detail_kajian_versi_baru_user', function () {
//     return view('kajian.read.detail_kajian_versi_baru_user');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::view('/', 'home.homepage');
Route::view('/kajian2', 'kajian2');
Route::view('/layout_user_2', 'layout_user_2');
Route::view('/form_create_user', 'kajian.write.form_create_user');
Route::view('/form_create_user_nv', 'kajian.write.form_create_user_nv');
Route::view('/detail_kajian_asli_user', 'kajian.read.detail_kajian_asli_user_UI');
Route::view('/detail_kajian_versi_baru_user', 'kajian.read.detail_kajian_versi_baru_user');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
});


// Route::group([], function () {
//     // Route::get('/', [HomeController::class, 'index']);
//     Route::get('/beranda', [HomeController::class, 'index'])->name('home');
//     Route::get('/about', [AboutController::class, 'index'])->name('about');

//     Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
//     Route::get('/register/{page}', [RegisteredUserController::class, 'create'])->name('register.show');
//     Route::post('/register/1', [RegisteredUserController::class, 'store'])->name('register.step1');
//     Route::post('/register/2', [RegisteredUserController::class, 'store_additional_1'])->name('register.step2');
//     Route::post('/register/3', [RegisteredUserController::class, 'store_additional_2'])->name('register.step3');
//     Route::post('/register/4', [RegisteredUserController::class, 'store_additional_3'])->name('register.step4');
// });

Route::get('/beranda', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::prefix('register')->name('register.')->group(function () {
    Route::get('/', [RegisteredUserController::class, 'create'])->name('show');
    Route::get('/{page}', [RegisteredUserController::class, 'create'])->name('show');
    Route::post('/1', [RegisteredUserController::class, 'store'])->name('step1');
    Route::post('/2', [RegisteredUserController::class, 'store_additional_1'])->name('step2');
    Route::post('/3', [RegisteredUserController::class, 'store_additional_2'])->name('step3');
    Route::post('/4', [RegisteredUserController::class, 'store_additional_3'])->name('step4');
});

/**
 * Middleware 'auth' digunakan untuk membatasi akses ke halaman tertentu
 * Hanya bisa diakses oleh user yang sudah login
 */
Route::middleware('auth')->group(function () {
    // Breeze
    // Route::get('/profileb', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profileb', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profileb', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::prefix('profileb')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
    });
    


    /**
     * Registered middleware
     * Hanya bisa diakses oleh admin dan registered user
     * 
     * 
     * Referensi:
     * app/Http/Middleware/UserManagement/
     * app/Http/Controllers/UserManagement/
     */

    // Route::middleware('registered')->group(function () {
    //     Route::get('/kajian/create', [KajianController::class, 'create'])->name('kajian.create');
    //     Route::get('/kajian/{id}', [KajianController::class, 'show'])->name('kajian.show');
    //     Route::get('/kajian/{id}/new-version', [KajianController::class, 'showNewVersionDetail'])->name('kajian.new_version');
    //     Route::post('/kajian', [KajianController::class, 'store'])->name('kajian.store');
    //     Route::delete('/kajian/{id}', [KajianController::class, 'destroy'])->name('kajian.destroy');
        
    //     Route::get('/profile', [ProfileController::class, 'show_profile'])->name('profile.show');
    //     Route::get('/profile/edit', [ProfileController::class, 'edit_profile'])->name('profile.edit_profile');
    //     Route::put('/profile', [ProfileController::class, 'store_edit_profile'])->name('profile.store');
    // });
    Route::middleware('registered')->group(function () {
        Route::resource('kajian', KajianController::class)
            ->only(['create', 'show', 'store', 'destroy']);
        Route::prefix('kajian')->name('kajian.')->group(function () {
            // Route::get('/create', [KajianController::class, 'create'])->name('create');
            Route::get('/{kajian}', [KajianController::class, 'show'])->name('show');
            Route::get('/{kajian}/new-version', [KajianController::class, 'showNewVersionDetail'])->name('show.new_version');
            Route::get('/{kajian}/create/new', [KajianController::class, 'create_new_version'])->name('edit.new_version');
            // Route::post('/', [KajianController::class, 'store'])->name('store');
            // Route::delete('/{id}', [KajianController::class, 'destroy'])->name('destroy');
        });

        Route::prefix('profile')->name('profile.')->group(function () {
            Route::get('/akun_muhammadiyah', [ProfileController::class, 'show_kajian_in_profile_muhammadiyah'])->name('akun_muhammadiyah');
            Route::get('/akun_user', [ProfileController::class, 'show_kajian_in_profile_user'])->name('akun_user');
            Route::get('/', [ProfileController::class, 'show_profile'])->name('show');
            Route::get('/edit', [ProfileController::class, 'edit_profile'])->name('edit_profile');
            Route::put('/', [ProfileController::class, 'store_edit_profile'])->name('store');
        });
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
    // Route::middleware('admin')->group(function () {
    //     Route::get('admin', [AdminController::class, 'index'])->name('admin.dashboard');
    //     Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    //     // User
    //     Route::get('admin/users', [AdminController::class, 'show_data_user'])->name('admin.show_data_user');
    //     Route::get('admin/users/{id}', [AdminController::class, 'show_detail_user'])->name('admin.show_detail_user');
    //     Route::get('admin/users/{id}/edit', [AdminController::class, 'edit_user'])->name('admin.edit_user');
    //     Route::put('admin/users/{id}', [AdminController::class, 'update_user'])->name('admin.update_user');
    //     Route::delete('admin/users/{id}', [AdminController::class, 'delete_user'])->name('admin.delete_user');

    //     Route::get('admin/history_login', [AdminController::class, 'show_history_login'])->name('admin.show_history_login');
    //     Route::get('admin/history_upload', [AdminController::class, 'show_history_upload'])->name('admin.show_history_upload');
    //     Route::get('admin/history_download', [AdminController::class, 'show_history_download'])->name('admin.show_history_download');

    //     // Kajian
    //     Route::get('admin/kajian', [KajianController::class, 'index'])->name('admin.kajian.index');
    //     Route::get('admin/kajian/create', [KajianController::class, 'create'])->name('admin.kajian.create');
    //     Route::post('admin/kajian', [KajianController::class, 'store'])->name('admin.kajian.store');
    //     Route::delete('admin/kajian/{id}', [KajianController::class, 'destroy'])->name('admin.kajian.destroy');
    //     Route::get('admin/kajian/{id}', [KajianController::class, 'show'])->name('admin.kajian.show');
    //     Route::get('admin/kajian/{id}/edit', [KajianController::class, 'edit'])->name('admin.kajian.edit');
    //     Route::put('admin/kajian/{id}', [KajianController::class, 'update'])->name('admin.kajian.update');

    // });

    Route::middleware('admin')->group(function () {
        Route::prefix('admin')->name('admin.')->group(function () {
            Route::get('/', [AdminController::class, 'index'])->name('dashboard');
            Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
            
            // User
            Route::get('/users', [AdminController::class, 'show_data_user'])->name('show_data_user');
            Route::get('/users/{id}', [AdminController::class, 'show_detail_user'])->name('show_detail_user');
            Route::get('/users/{id}/edit', [AdminController::class, 'edit_user'])->name('edit_user');
            Route::put('/users/{id}', [AdminController::class, 'update_user'])->name('update_user');
            Route::delete('/users/{id}', [AdminController::class, 'delete_user'])->name('delete_user');

            Route::get('/history_login', [AdminController::class, 'show_history_login'])->name('show_history_login');
            Route::get('/history_upload', [AdminController::class, 'show_history_upload'])->name('show_history_upload');
            Route::get('/history_download', [AdminController::class, 'show_history_download'])->name('show_history_download');

            // Kajian
            Route::prefix('kajian')->name('kajian.')->group(function () {
                Route::get('/', [KajianController::class, 'index'])->name('index');
                Route::get('/create', [KajianController::class, 'create'])->name('create');
                Route::post('/', [KajianController::class, 'store'])->name('store');
                Route::delete('/{kajian}', [KajianController::class, 'destroy'])->name('destroy');
                Route::get('/{kajian}', [KajianController::class, 'show'])->name('show');
                Route::get('/{kajian}/edit', [KajianController::class, 'edit'])->name('edit');
                Route::put('/{kajian}', [KajianController::class, 'update'])->name('update');
            });
        });
    });

});
// Route::controller(KajianController::class)->group(function () {
//     Route::get('/data_kajian', 'index')->name('data_kajian');
//     Route::get('/kajian', 'show_kajian')->name('kajian.show');
//     Route::get('/kajian/{id}', 'show')->name('kajian.detail');
//     Route::get('/kajian/create', 'create')->name('kajian.create');
//     Route::get('/kajian/{id}/create_new', 'edit')->name('kajian.edit.new_version');
//     Route::get('/kajian/download/{id}', 'downloadKajian')->name('kajian.download');

// });

Route::resource('kajian', KajianController::class)->only(['index', 'show']);
Route::prefix('kajian')->name('kajian.')->group(function () {
    Route::get('/latest', [KajianController::class, 'show_kajian'])->name('show.latest');
    Route::get('/download/{id}', [KajianController::class, 'downloadKajian'])->name('download');
    Route::get('/{id}/new_version', [KajianController::class, 'downloadNewVersion'])->name('download.new_version');
});

require __DIR__ . '/auth.php';
