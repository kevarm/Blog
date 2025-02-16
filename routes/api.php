<?php

use App\Http\Controllers\ApiPostController;
use Illuminate\Support\Facades\Route;

Route::get('/posts', [ApiPostController::class, 'index']);
Route::get('/posts/{id}', [ApiPostController::class, 'show']);
Route::post('/posts', [ApiPostController::class, 'store']);
Route::put('/posts/{id}', [ApiPostController::class, 'update']);
Route::delete('/posts/{id}', [ApiPostController::class, 'destroy']);