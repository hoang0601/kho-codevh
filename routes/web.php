<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return "Student Management";
});

Route::get('/cntt1', [StudentController::class, 'studentsCNTT1']);

Route::get('/subject', [StudentController::class, 'subjectOfStudent']);

Route::get('/count', [StudentController::class, 'countStudent']);

Route::get('/total', [StudentController::class, 'totalSubject']);

Route::get('/active', [StudentController::class, 'activeStudent']);