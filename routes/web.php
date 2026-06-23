<?php

use App\Http\Controllers\HeroController;
use App\Http\Controllers\StudentController;
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
