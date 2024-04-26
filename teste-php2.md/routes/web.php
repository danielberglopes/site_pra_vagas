<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\LoginController;
use App\Http\Controllers\Controller;

Route::get('/', [LoginController::class, 'login']);

Route::match(['get', 'post'], '/auth', [LoginController::class, 'auth'])->name('login.auth');


Route::get('/welcome', function () {
    return view('welcome');
});
