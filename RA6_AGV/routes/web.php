<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::get('/', [PostController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);
