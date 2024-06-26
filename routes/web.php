<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KajianController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserManagement\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\KategoriKajianController;

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

// routes/search
// Route::get('/kajian/search', [KajianController::class, 'search'])->name('kajian.search');
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/search-kajian', [KajianController::class, 'search'])->name('search');
Route::get('/search-about', [AboutController::class, 'search'])->name('search');
Route::get('/search-profile', [ProfileController::class, 'search'])->name('search');




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
// Route::view('/', 'home.homepage');
Route::view('/kajian2', 'kajian2');
Route::view('/layout_user_2', 'layout_user_2');
Route::view('/form_create_user', 'kajian.write.form_create_user');
Route::view('/form_create_user_nv', 'kajian.write.form_create_user_nv');
Route::view('/detail_kajian_asli_user', 'kajian.read.detail_kajian_asli_user_UI');
Route::view('/detail_kajian_versi_baru_user', 'kajian.read.detail_kajian_versi_baru_user');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/beranda', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::post('/update-recommendations', [HomeController::class, 'updateRecommendations']);
Route::post('/update-recommendations', [KajianController::class, 'updateRecommendations']);

Route::prefix('register')->name('register.')->group(function () {
    Route::get('/', [RegisteredUserController::class, 'create'])->name('show');
    Route::get('/{page}', [RegisteredUserController::class, 'create'])->name('show');
    Route::post('/1', [RegisteredUserController::class, 'store'])->name('step1');
    Route::post('/2', [RegisteredUserController::class, 'store_additional_1'])->name('step2');
    Route::post('/3', [RegisteredUserController::class, 'store_additional_2'])->name('step3');
    Route::post('/4', [RegisteredUserController::class, 'store_additional_3'])->name('step4');
});

// Rute yang tidak memerlukan autentikasi
Route::prefix('profile')->name('profile.')->group(function () {
    Route::get('/akun_muhammadiyah', [ProfileController::class, 'show_kajian_in_profile_muhammadiyah'])->name('akun_muhammadiyah');
    Route::get('/akun_pengguna', [ProfileController::class, 'show_kajian_in_profile_user'])->name('akun_pengguna');
});

// Rute yang memerlukan autentikasi
Route::middleware('auth')->group(function () {
    Route::prefix('profileb')->name('profileb.')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/edit', [ProfileController::class, 'edit_profile'])->name('edit_profile');
        Route::get('/informasi', [ProfileController::class, 'show_profile_information'])->name('show.information');
        Route::put('/', [ProfileController::class, 'store_edit_profile'])->name('store');
        Route::put('/edit/picture/update', [ProfileController::class, 'upload_profile_picture'])->name('update.picture');
        Route::put('/edit/picture/delete', [ProfileController::class, 'delete_profile_picture'])->name('delete.picture');
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
    Route::middleware('registered')->group(function () {
        Route::resource('kajian', KajianController::class)
            ->only(['create', 'show', 'store', 'destroy', 'edit', 'update']);
        Route::prefix('kajian')->name('kajian.')->group(function () {
            // Route::get('/create', [KajianController::class, 'create'])->name('create');
            Route::get('/{kajian}', [KajianController::class, 'show'])->name('show');
            Route::get('/{kajian}/new-version', [KajianController::class, 'showNewVersionDetail'])->name('show.new_version');
            Route::get('/{kajian}/create/new', [KajianController::class, 'create_new_version'])->name('edit.new_version');
            Route::get('/{oldKajian}/create/new/{version}/{kajian}', [KajianController::class, 'show_editor_new_version'])->name('new_version.konten');
            Route::put('/{oldKajian}/create/new/{version}/{kajian}/save', [KajianController::class, 'update_konten_new_version'])->name('new_version.konten.store');
            Route::get('/create/konten/{kajian}', [KajianController::class, 'showEditor'])->name('konten');
            Route::put('/create/konten/{kajian}/save', [KajianController::class, 'update_konten'])->name('store.editor');
            // Route::post('/', [KajianController::class, 'store'])->name('store');
            // Route::delete('/{id}', [KajianController::class, 'destroy'])->name('destroy');
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
            Route::put('users/{id}/verify', [AdminController::class, 'verify_user'])->name('verify_user');

            Route::get('/history_login', [AdminController::class, 'show_history_login'])->name('show_history_login');
            Route::get('/history_upload', [AdminController::class, 'show_history_upload'])->name('show_history_upload');
            Route::get('/history_download', [AdminController::class, 'show_history_download'])->name('show_history_download');

            // Kajian
            Route::resource('kajian', KajianController::class);
            Route::prefix('kajian')->name('kajian.')->group(function () {
                Route::get('/{kajian}', [KajianController::class, 'show'])->name('show');
                Route::get('/{kajian}/new-version', [KajianController::class, 'showNewVersionDetail'])->name('show.new_version');
                Route::get('/{kajian}/create/new', [KajianController::class, 'create_new_version'])->name('edit.new_version');
                Route::get('/{oldKajian}/create/new/{version}/{kajian}', [KajianController::class, 'show_editor_new_version'])->name('new_version.konten');
                Route::put('/{oldKajian}/create/new/{version}/{kajian}/save', [KajianController::class, 'update_konten_new_version'])->name('new_version.konten.store');
                Route::get('/create/konten/{kajian}', [KajianController::class, 'showEditor'])->name('konten');
                Route::put('/create/konten/{kajian}/save', [KajianController::class, 'update_konten'])->name('store.editor');
            });

            // Kategori Kajian
            Route::resource('kategori_kajian', KategoriKajianController::class);
        });
    });

});

Route::resource('kajian', KajianController::class)->only(['index', 'show']);
Route::prefix('kajian')->name('kajian.')->group(function () {
    Route::get('/latest', [KajianController::class, 'show_kajian'])->name('show.latest');
    Route::get('/download/{id}', [KajianController::class, 'downloadKajian'])->name('download');
    Route::get('/{id}/new_version', [KajianController::class, 'downloadNewVersion'])->name('download.new_version');
});



require __DIR__.'/auth.php';
