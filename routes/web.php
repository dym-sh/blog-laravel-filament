<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SideController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class,'index'])->name('home');
Route::get('/about-us', [SideController::class,'about'])->name('about-us');
Route::get('/category/{category:slug}', [PostController::class,'byCategory'])->name('by-category');
Route::get('/{post:slug}', [PostController::class,'show'])->name('view');
