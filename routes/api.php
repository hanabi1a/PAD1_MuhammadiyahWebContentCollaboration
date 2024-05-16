<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KajianApiController;
use App\Http\Controllers\Auth\RegisteredUserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/kajian-api', [KajianApiController::class, 'index'])->name('kajian-api.index');
Route::get('/kajian-api/{id}', [KajianApiController::class, 'show'])->name('kajian-api.spesific');
Route::get('/kajian-api/download/{id}', [KajianApiController::class, 'downloadKajian'])->name('kajian-api.download');
Route::get('/kajian/search', [KajianApiController::class, 'search'])->name('kajian-api.search');
Route::post('/kajian/create', [KajianApiController::class, 'store'])->name('kajian-api.store');
Route::middleware('jwt.verify')->post('/kajian', 'Api\KajianApiController@store');

Route::post('/auth/register', \App\Http\Controllers\Api\Auth\RegisterController::class);
Route::post('/auth/login', \App\Http\Controllers\Api\Auth\LoginController::class);


//Route buat regis via api
Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register');
