<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{type}', [PostController::class, 'filterByType'])->name('posts.filterByType');

Route::get('/login', [AdminController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AdminController::class, 'login'])->name('login.submit');
Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
Route::get('/admin', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');

