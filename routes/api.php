<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Di file ini berhubungan dengan AuthController dan digunakan untuk mengatur api pada mobile

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
//-------------SELESAI DI SAVE, JANGAN LUPA LAKUKAN PERINTAH PHP ARTISAN OPTIMIZE--------

//login
Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);

//API logout berhubungan dengan AuthController
Route::post('/logout', [App\Http\Controllers\Api\AuthController::class, 'logout'])->middleware('auth:sanctum');

//company
Route::get('/company', [App\Http\Controllers\Api\CompanyController::class, 'show'])->middleware('auth:sanctum');

//checkin
Route::post('/checkin', [App\Http\Controllers\Api\AttendanceController::class, 'checkin'])->middleware('auth:sanctum');

//checkout
Route::post('/checkout', [App\Http\Controllers\Api\AttendanceController::class, 'checkout'])->middleware('auth:sanctum');

//is checkin
Route::get('/is-checkin', [App\Http\Controllers\Api\AttendanceController::class, 'isCheckedin'])->middleware('auth:sanctum');

//update profile
Route::post('/update-profile', [App\Http\Controllers\Api\AuthController::class, 'updateProfile'])->middleware('auth:sanctum');

//create permission
Route::apiResource('/api-permissions', App\Http\Controllers\Api\PermissionController::class)->middleware('auth:sanctum');

//notes
Route::apiResource('/api-notes', App\Http\Controllers\Api\NoteController::class)->middleware('auth:sanctum');
