<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/', function () {
    return Response()->json('API sudah bisa digunakan');
});

Route::post('login', [\App\Http\Controllers\API\LoginController::class, 'login'])->name('login');


//token sudah ada
Route::middleware('auth:sanctum')->group(function () {
    Route::get('me', [\App\Http\Controllers\API\LoginController::class, 'me'])->name('me');
    Route::apiResource('user', \App\Http\Controllers\API\UserController::class);
});