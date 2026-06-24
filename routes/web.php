<?php

use App\Http\Controllers\HeroController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return 'this is the home page';
});

Route::get('/hero', [HeroController::class, 'index']);

Route::fallback(function () {
    return 'this page does not exists';
});

// route using prefix and controller together


Route::controller(StudentController::class)->group(function () {
    Route::get('/students', 'index');
    Route::get('/student/{id}', 'viewDetails');
});

Route::controller(TeacherController::class)->group(function () {
    Route::get('/teachers', 'index');
    Route::get('/teacher/{id}', 'viewDetails');
    Route::get('/teachers/courses', 'courses');
});

Route::controller(MentorController::class)->group(function () {
    Route::get('/mentors', 'index');
    Route::get('/mentor/{id}', 'viewCourse');
});
