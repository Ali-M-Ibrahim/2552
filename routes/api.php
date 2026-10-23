<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/post-uri', function () {
    return 'Hello I am your first post end point';
});

Route::post('create4', [ProductController::class, 'create4']);
Route::post('create5', [ProductController::class, 'create5']);
Route::put('update2/{id}', [ProductController::class, 'update2']);
Route::put('update3/{id}', [ProductController::class, 'update3']);
