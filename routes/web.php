<?php

use App\Http\Controllers\TeacherController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', [WelcomeController::class, 'welcome']);


Route::get('/', function () {
    return 'this is the home page';
});


Route::fallback(function () {
    return 'this page does not exists';
});


Route::get('teacher', [TeacherController::class, 'index']);
Route::get('added', [TeacherController::class, 'add']);
Route::get('findTeach/{id}', [TeacherController::class, 'show']);
Route::get('updated/{id}', [TeacherController::class, 'update']);
Route::get('delete/{id}', [TeacherController::class, 'delete']);

