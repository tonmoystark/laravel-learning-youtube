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
