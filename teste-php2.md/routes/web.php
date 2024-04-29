<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Controller;

Route::get('/', [LoginController::class, 'login']);


Route::match(['get', 'post'], '/auth', [LoginController::class, 'auth'])->name('login.auth');

Route::match(['get', 'post'], '/welcome', [LoginController::class, 'welcome'])->name('nomes.filtrar');

Route::post('/post_criar', [LoginController::class, 'store'])->name('post_criar');



Route::get('/create',function(){
    return view('create');
    });
    Route::match(['get', 'post'],'/index',[PostController::class,'index'])->name('filtra.empresa');
    Route::post('/post',[PostController::class,'store']);
    Route::delete('/delete/{id}',[PostController::class,'destroy']);
    Route::get('/edit/{id}',[PostController::class,'edit']);
    
    Route::delete('/deleteimage/{id}',[PostController::class,'deleteimage']);
    Route::delete('/deletecover/{id}',[PostController::class,'deletecover']);
    
    Route::put('/update/{id}',[PostController::class,'update']);

    Route::get('/secandidata/{id}',[PostController::class, 'secandidata']);

    // Route::post('/candidatura ', [PostController::class, 'candidatura'])->name('candidatura_criar');
    Route::post('/secandidata/candidatura_cria', [PostController::class, 'candidatura'])->name('candidatura_criar');

    Route::match(['get', 'post'],'/candidatos',[PostController::class,'candidatos'])->name('filtra.candidatos');
    Route::delete('/dele/{id}',[PostController::class,'destroyCandidatos']);