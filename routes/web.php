<?php

use App\Http\Controllers\LearnerController;
use App\Http\Controllers\StudentController;
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


Route::controller(LearnerController::class)->group(function () {
    Route::get('/learners', 'index');
    Route::get('learner/{id}', 'showIndividual');
    Route::get('update', 'update');
    Route::get('add', 'add');
    Route::get('bright', 'bright');
    Route::get('male', 'male');
    Route::get('female', 'female');
    Route::get('delete/{id}', 'delete');
    Route::get('restore', 'restore');
});
