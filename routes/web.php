<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NguyenVanHoangController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nguyenvanhoang/gioithieu',
    [NguyenVanHoangController::class, 'gioiThieu']
);