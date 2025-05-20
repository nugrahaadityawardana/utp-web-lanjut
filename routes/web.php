<?php

use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('layout');
});
Route::resource("/students", StudentController::class);
Route::resource("/teachers", TeacherController::class);