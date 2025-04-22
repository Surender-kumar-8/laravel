<?php

use App\Http\Controllers\Admin\Web\HomeController;
use Illuminate\Support\Facades\Route;
use PrinceRai\CustomAuth\Controllers\LoginController;
use PrinceRai\CustomAuth\Controllers\RegisterController;

Route::get('/dashboard',[HomeController::class,'index']);

Route::middleware(['web'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/custom-login', [LoginController::class, 'authLogin'])->name('custom.login');
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('custom.register');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/home', [LoginController::class, 'home'])->name('home');
});