<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('posts')->group(function () {
    Route::get('/', [App\Http\Controllers\Posts\PostsController::class, 'index']);
    Route::post('/', [App\Http\Controllers\Posts\PostsController::class, 'store']);
});
