<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CardController::class, 'index']);

Route::get('/welcome', [WelcomeController::class, 'welcome']);
Route::get('/profile/{id}', [CardController::class, 'show']);
Route::get('/chirper', [MessageController::class, 'index']);
