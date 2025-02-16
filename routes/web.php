<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocuController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

Route::get('/api', [DocuController::class,"api"])->name("api.api");
Route::get('/', [PostController::class, 'index']);
Route::get('post/{id}', [PostController::class, 'show'])->name('show');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/posts/create', [PostController::class, 'create'])->name('createPost');
Route::post('/posts', [PostController::class, 'store'])->name('storePost');
Route::get('post/{id}/edit', [PostController::class, 'edit'])->name('admin.edit');
Route::put('post/{id}', [PostController::class, 'update'])->name('admin.update');
Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('post.destroy');
