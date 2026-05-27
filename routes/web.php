<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\ValidUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}) -> middleware(ValidUser::class);

Route::post('login-process',[LoginController::class,'login']) -> name('login-process');
Route::view('/dashboard','dashboard') -> name('dashboard') -> middleware(ValidUser::class);

Route::view('/register','registration') -> name('register');
Route::view('/login','login-form') -> name('login');
Route::resource('/users',UserController::class);
