<?php

use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Auth\UserUtilityController;
use App\Http\Controllers\Api\KajianApiController;
use App\Http\Controllers\api\v1\KajianController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::middleware('auth:sanctum')->get('/kajian-api', [KajianApiController::class, 'index'])->name('kajian-api.index');
Route::get('/kajian-api', [KajianApiController::class, 'index'])->name('kajian-api.index');
// Route::middleware('auth:sacntum')->get('/kajian-api/{id}', [KajianApiController::class, 'show'])->name('kajian-api.spesific');
Route::get('/kajian-api/{id}', [KajianApiController::class, 'show'])->name('kajian-api.spesific');
// Route::middleware('auth:sanctum')->get('/kajian-api/download/{id}', [KajianApiController::class, 'downloadKajian'])->name('kajian-api.download');
Route::get('/kajian-api/download/{id}', [KajianApiController::class, 'downloadKajian'])->name('kajian-api.download');
// Route::post('/kajian/create', [KajianApiController::class, 'store'])->name('kajian-api.store');
Route::get('/kajian/search', [KajianApiController::class, 'search'])->name('kajian-api.search');
// Route::middleware('jwt.verify')->post('/kajian', 'Api\KajianApiController@store');

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/kajian-api/create', [KajianApiController::class, 'store']);
    Route::delete('/kajian-api/destroy/{id}', [KajianApiController::class, 'destroy']);
    Route::put('/kajian-api/update/{id}', [KajianApiController::class, 'update']);
    Route::patch('/kajian-api/update-deskripsi/{id}', [KajianApiController::class, 'updateDescription']);
    Route::patch('/auth/update-username/{id}', [UserUtilityController::class, 'updateUsername']);
    Route::patch('/auth/update-password/{id}', [UserUtilityController::class, 'updatePassword']);

    // New Generation
    
    Route::prefix('profile')->group(function () {
        Route::get('', [UserUtilityController::class, 'show_detail_profile']);
        Route::post('/basic-information', [RegisterController::class, 'store_additional_1']);
        Route::post('/detail-information', [RegisterController::class, 'store_additional_2']);
    });


    // Route::apiResource('kajian', KajianController::class);
    // Route::prefix('kajian')->group(function () {
    //     Route::get('/search', [KajianController::class, 'search']);
    //     Route::get('/download/{id}', [KajianController::class, 'downloadKajian']);
    // });
});

Route::post('/auth/register', \App\Http\Controllers\Api\Auth\RegisterController::class);
Route::post('/auth/login', \App\Http\Controllers\Api\Auth\LoginController::class);
