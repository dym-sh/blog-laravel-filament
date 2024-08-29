<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class,'index'])->name('home');
Route::get('/{post:slug}', [PostController::class,'show'])->name('view');
