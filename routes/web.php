<?php

use App\Http\Controllers\admincon;
use App\Http\Controllers\loginregis;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KajianController;
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
// Route::get('/layout', function () {
//     return view('admin/layout');
// });
// Route::get('/homepage', function () {
//     return view('user/homepage');
// });
// Route::get('/homepage2', function () {
//     return view('user/homepage');
// });
// Route::get('/sign_in', function () {
//     return view('user/sign_in');
// });
// Route::get('/sign_up', function () {
//     return view('user/sign_up');
// });
// Route::get('/index', function () {
//     return view('user/index');
// });
// Route::get('/kajian', function () {
//     return view('user/kajian');
// });
// Route::get('/kajian', function () {
//     return view('user/kajian');
// });
// Route::get('/about', function () {
//     return view('user/about');
// });
// Route::get('/about', function () {
//     return view('user/about');
// });
// Route::get('/dashboard', function () {
//     return view('admin/dashboard');
// });
// Route::get('/data_kajian', function () {
//     return view('admin/data_kajian');
// });
// Route::get('/data_user', function () {
//     return view('admin/data_user');
// });
// Route::get('/history_login', function () {
//     return view('admin/history_login');
// });
// Route::get('/history_download', function () {
//     return view('admin/history_download');
// });
// Route::get('/history_upload', function () {
//     return view('admin/history_upload');
// });
// Route::get('/form_create_admin', function () {
//     return view('admin/form_create_admin');
// });
// Route::get('/detail_kajian_ori', function () {
//     return view('admin/detail_kajian_ori');
// });

// Route::controller(loginregis::class)->group(function () {
//     Route::get('/sign_up', 'register')->name('register');
//     Route::post('/store', 'store')->name('store');
//     Route::get('/sign_in', 'login')->name('login');
//     Route::post('/authenticate', 'authenticate')->name('auth');
//     Route::get('/homepage', 'homepage')->name('homepage');
//     Route::post('/logout', 'logout')->name('logout');
// });
// Route::get('/sign_up', function () {
//     return view('user/sign_up');
// });
// Route::get('/index', function () {
//     return view('user/index');
// });
Route::get('/footer', function () {
    return view('user/footer');
});
Route::get('/layout', function () {
    return view('user/layout');
});
Route::get('/layout2', function () {
    return view('user/layout2');
});
Route::get('/kajian', function () {
    return view('user/kajian');
});
Route::get('/about', function () {
    return view('user/about');
});
Route::get('/about', function () {
    return view('user/about');
});
Route::get('/dashboard', function () {
    return view('admin/dashboard');
});
Route::get('/data_kajian', function () {
    return view('admin/data_kajian');
});
Route::get('/data_user', function () {
    return view('admin/data_user');
});
Route::get('/history_login', function () {
    return view('admin/history_login');
});
Route::get('/history_download', function () {
    return view('admin/history_download');
});
Route::get('/history_upload', function () {
    return view('admin/history_upload');
});
Route::get('/form_create_admin', function () {
    return view('admin/form_create_admin');
});
Route::get('/form_edit_admin_ori', function () {
    return view('admin/form_edit_admin_ori');
});
Route::get('/form_edit_user_nv', function () {
    return view('admin/form_edit_user_nv');
});
Route::get('/form_edit_user_ori', function () {
    return view('admin/form_edit_user_ori');
});
Route::get('/detail_kajian_ori', function () {
    return view('admin/detail_kajian_ori');
});
Route::get('/detail_kajian_nv', function () {
    return view('admin/detail_kajian_nv');
});
Route::get('/detail_kajian_upload', function () {
    return view('admin/detail_kajian_upload');
});
Route::get('/detail_akun_user', function () {
    return view('admin/detail_akun_user');
});
Route::get('/form_edit_akun_user', function () {
    return view('admin/form_edit_akun_user');
});
Route::get('/header1', function () {
    return view('user/header1');
});
Route::get('/header2', function () {
    return view('user/header2');
});
Route::get('/homepage', function () {
    return view('user/homepage');
});
Route::get('/homepage2', function () {
    return view('user/homepage2');
});
Route::get('/index', function () {
    return view('user/index');
});
Route::get('/kajian', function () {
    return view('user/kajian');
});
Route::get('/about', function () {
    return view('user/about');
});
Route::get('/profile_user', function () {
    return view('admin/profile_user');
});
Route::get('/carousel', function () {
    return view('user/carousel');
});
Route::get('/kajian2', function () {
    return view('user/kajian2');
});
Route::get('/news', function () {
    return view('user/news');
});
Route::get('/profile_user', function () {
    return view('user/profile_user');
});
Route::get('/form_create_user', function () {
    return view('user/form_create_user');
});
Route::get('/detail_kajian_ori_user', function () {
    return view('user/detail_kajian_ori_user');
});
Route::get('/detail_kajian_nv_user', function () {
    return view('user/detail_kajian_nv_user');
});
Route::get('/detail_kajian_upload_user', function () {
    return view('user/detail_kajian_upload_user');
});
Route::get('/form_edit_user', function () {
    return view('user/form_edit_user');
});
Route::get('/form_upload_user', function () {
    return view('user/form_upload_user');
});

Route::controller(loginregis::class)->group(function () {
    Route::get('/sign_up', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/sign_in', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('auth');
    // Route::get('/homepage', 'homepage')->name('homepage');
    Route::get('/adminhome', 'adminhome')->name('adminhome');
    Route::post('/logout', 'logout')->name('logout');
});

Route::controller(KajianController::class)->group(function () {
    Route::get('/create_form', 'create')->name('create');
    Route::post('/storekajian', 'storekajian')->name('storekajian');
    Route::get('/kajian/{id}', 'kajian')->name('kajian');
    Route::get('/data_kajian', 'data_kajian')->name('data_kajian');
    Route::delete('/deleteKajian/{id}', 'deleteKajian')->name('deleteKajian');
    Route::get('/edit_kajian/{id}', 'edit_kajian')->name('edit_kajian');
    Route::post('/update_kajian/{id}', 'update_kajian')->name('update_kajian');
});


Route::controller(admincon::class)->group(function () {
    Route::get('/admin_dashboard', 'dashboard')->name('dashboard');
    Route::delete('/deleteUser/{id}', 'deleteUser')->name('deleteUser');
    Route::get('/data_user', 'data_user')->name('data_user');
    Route::get('/history_login', 'showHistoryLogin')->name('history_login');
    Route::get('/history_download', 'showHistoryDownload')->name('history_download');
    Route::get('/history_upload', 'showHistoryUpload')->name('history_upload');
    Route::get('/detailUser/{id}', 'showDetailUser')->name('showDetailUser');
    Route::get('/editUser/{id}', 'EditUser')->name('EditUser');
    Route::post('/updateUser/{id}', 'UpdateUser')->name('UpdateUser');

});



