<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\LoginController;
use App\Http\Controllers\Controller;

Route::get('/', [LoginController::class, 'login']);

Route::match(['get', 'post'], '/auth', [LoginController::class, 'auth'])->name('login.auth');

Route::get('/welcome', [LoginController::class, 'welcome']);



Route::post('/post_criar', [LoginController::class, 'store'])->name('post_criar');