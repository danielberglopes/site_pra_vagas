<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController; // Importe o controlador correto aqui

Route::get('/', [Controller::class, 'login'])->name('login');

Route::get('/welcome', function () {
    return view('welcome');
});
