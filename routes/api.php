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
