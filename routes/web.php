<?php

use App\Http\Controllers\HeroController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return 'this is the home page';
});

Route::get('/hero', [HeroController::class, 'index']);

Route::fallback(function () {
    return 'this page does not exists';
});

// route using prefix and controller together
