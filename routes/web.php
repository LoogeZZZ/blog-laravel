<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blog/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('/blog/{id}', [BlogController::class, 'update'])->name('blog.update');
Route::delete('/blog/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
