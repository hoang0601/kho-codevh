<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LopHocController;
use Illuminate\Support\Facades\Auth;

Route::resource('classes', LopHocController::class);
Route::get('/login',[AuthController::class,'showLogin'])->name('login');
Route::post('/login',[AuthController::class,'login']);

Route::get('/register',[AuthController::class,'showRegister']);
Route::post('/register',[AuthController::class,'register']);

Route::get('/logout',[AuthController::class,'logout']);

Route::middleware('auth')->group(function () {
    Route::resource('classes', LopHocController::class);

});