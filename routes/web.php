<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/chirper', [CardController::class, 'index']);

Route::get('/welcome', [WelcomeController::class, 'welcome']);
Route::get('/profile/{id}', [CardController::class, 'show']);
Route::get('/chirper', [MessageController::class, 'index']);


Route::get('/', function () {
    return 'this is the home page';
});

Route::prefix('/details')->group(function () {
    Route::get('/students', function () {
        return 'getting students data';
    })->name('student-details');

    Route::get('/teachers', function () {
        return 'getting teachers data';
    })->name('teacher-details');
});

Route::fallback(function () {
    return 'this page does not exists';
});

Route::get('/student/{id}/{registration}', function ($id, $registration) {
    return 'student id ' . $id . ' registration number is ' . $registration;
});

Route::get('views', function () {
    $name = 'testing';
    $email = 'test@t.bd';
    // return view('testerview')->with('name', $name)->with('email', $email);
    // return view('testerview', compact('name', 'email'));
    return view('testerview', ['name' => $name, 'email' => $email]);
});

Route::get('luchu/{name}/{email}', function ($name, $email) {
    return view('testerview', compact('name', 'email'));
});

Route::get('article', function () {
    return view('article');
});

Route::get('modern', function () {
    return view('modernLay');
});
