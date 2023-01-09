<?php

use App\Http\Controllers\AdminKuisController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KuisController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LeaderboardController;

Route::get('/', [HomeController::class, 'home'])->middleware('auth');


Route::get('/leaderboard', [LeaderboardController::class, 'leaderboard'])->middleware('auth');

Route::get('/profile', [ProfileController::class, 'profile'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'autenticate'])->middleware('guest');

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/kuis', [KuisController::class, 'kuis'])->middleware('auth');

Route::get('/kuis/inputkuis', [KuisController::class, 'inputkuis']);

Route::resource('/kuis/inputkuis', AdminKuisController::class);
?>