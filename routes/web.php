<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index'])->name('posts.index');

// Ruta para filtrar por tipo de publicación
Route::get('/posts/{type}', [PostController::class, 'filterByType'])->name('posts.filterByType');



