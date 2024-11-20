<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('admin.home');
});

Route::get('/about', function () {
    return view('admin.about');
});
Route::get('/contact', function () {
    return view('admin.contact');
});


Route::prefix('admin')->group(function () {
    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index']);
        Route::get('/show', [UserController::class, 'show']);
        Route::get('/creat', [UserController::class, 'creat']);

    });
});


