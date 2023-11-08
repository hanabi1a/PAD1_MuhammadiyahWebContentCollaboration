<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegister;


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

Route::get('/homepage', function () {
    return view('user/homepage');
});
// Route::get('/sign_in', function () {
//     return view('user/sign_in');
// });
Route::get('/sign_up', function () {
    return view('user/sign_up');
});
Route::get('/index', function () {
    return view('user/index');
});
Route::get('/kajian', function () {
    return view('user/kajian');
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

Route::get('/form_admin', function () {
    return view('admin/form_admin');
});

// Route::controller(LoginRegister::class)->group(function () {
//     Route::get('/register', 'register')->name('register');
//     Route::post('/store', 'store')->name('store');
//     Route::get('/login', 'login')->name('login');
//     Route::post('/authenticate', 'authenticate')->name('authenticate');
//     Route::get('/homepage', 'homepage')->name('homepage');
//     Route::post('/logout', 'logout')->name('logout');
// });
// Route::get('/sign_up', function () {
//     return view('sign_up', [
//     ]);
// });

// Route::get('/homepage', [WCCController::class, 'homepage']);