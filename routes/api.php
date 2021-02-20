<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\V1\PostController as PostV1;
use App\Http\Controllers\Api\V2\PostController as PostV2;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// V1
Route::get('V1/descarga',[PostV1::class, 'descarga']);
Route::apiResource('V1/posts', PostV1::class)
    ->only(['index','show', 'destroy']);

// V2
Route::apiResource('V2/posts', PostV2::class)
    ->only(['index','show'])
    ->middleware('auth:sanctum');

Route::post('V2/login', [LoginController::class, 'login']);

