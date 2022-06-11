<?php

use App\Http\Controllers\PostApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/posts', [PostApiController::class, 'index']);
Route::get('/posts/{id}', [PostApiController::class, 'show'])->name('api.posts.show');

Route::get('/tags', [PostApiController::class, 'tagIndex']);
Route::get('/tags/{id}', [PostApiController::class, 'tagShow'])->name('api.tags.show');
