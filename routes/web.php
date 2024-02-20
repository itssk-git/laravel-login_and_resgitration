<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Models\User;




Route::get('/dashboard',function(){
return view('welcome');
})->name('home');
Route::get('/login', [authController::class, 'login'])->name('login');
Route::post('/login', [authController::class, 'loginPost'])->name('loginPost');
Route::get('/register', [authController::class, 'register'])->name('register');
Route::post('/register', [authController::class, 'registerPost'])->name('registerPost');
Route::get('/logout', [authController::class, 'logout'])->name('logout');