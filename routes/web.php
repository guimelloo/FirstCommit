<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Posts\PostsController::class, 'home']);

Route::prefix('posts')->group(function () {
    Route::get('/create', [App\Http\Controllers\Posts\PostsController::class, 'create'])->name('posts.create');
    Route::post('/', [App\Http\Controllers\Posts\PostsController::class, 'store'])->name('posts.store');
});
