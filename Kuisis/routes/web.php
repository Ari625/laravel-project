<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home-page',[
        'title' => 'HOME'
    ]);
})->middleware('auth');
Route::get('/', function () {
    return view('profile',[
        'title' => 'PROFILE'
    ]);
})->middleware('auth');

Route::get('/login',[UserController::class, 'login'])->middleware('guest')->name('login');

Route::post('/login',[UserController::class, 'autenticate'])->middleware('guest');

Route::post('/logout',[UserController::class, 'logout'])->middleware('auth');

Route::get('/registration',[UserController::class, 'registration'])->middleware('guest');

Route::post('/registration',[UserController::class, 'store'])->middleware('guest');
