<?php

use App\Http\Controllers\LearnerController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', [WelcomeController::class, 'welcome']);


Route::get('/', function () {
    return 'this is the home page';
});


Route::fallback(function () {
    return 'this page does not exists';
});

// route using prefix and controller together

Route::prefix('learner')->controller(LearnerController::class)->group(function () {
    Route::get('/', 'index');
    Route::view('/create', 'learners.create');
    Route::post('/add', 'add');
    Route::get('/edit/{id}', 'edit');
    Route::post('/update/{id}', 'update');
    Route::get('/delete/{id}', 'delete');
    Route::get('/suspended', 'trashData');
    Route::get('/retrieve/{id}', 'retrieveData');
    Route::get('/permanent-delete/{id}', 'permanentDelete');
});
