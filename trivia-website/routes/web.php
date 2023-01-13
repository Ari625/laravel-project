<?php

use App\Http\Controllers\AdminKuisController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KuisController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NextController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\DashboardController;

Route::get('/', [HomeController::class, 'home'])->middleware('auth');

Route::get('/leaderboard', [LeaderboardController::class, 'leaderboard'])->middleware('auth');

Route::get('/profile', [ProfileController::class, 'profile'])->middleware('auth');

Route::get('/settings', [SettingsController::class, 'settings'])->middleware('auth');

Route::get('/account', [ProfileController::class, 'showprofile'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'autenticate'])->middleware('guest');

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/kuis', [KuisController::class, 'kuis'])->middleware('auth');

Route::get('/addkuis', [AdminKuisController::class, 'addkuis']);

Route::post('/addkuis', [AdminKuisController::class, 'inputkuis']);

Route::resource('/kuis/addkuis', AdminKuisController::class);

Route::get('/dashboard',[DashboardController::class, 'dashboard']);

Route::get('/kuis/1',[NextController::class, 'next1'])->middleware('auth');
Route::get('/kuis/2',[NextController::class, 'next2'])->middleware('auth');
Route::get('/kuis/3',[NextController::class, 'next3'])->middleware('auth');
Route::get('/kuis/4',[NextController::class, 'next4'])->middleware('auth');
Route::get('/kuis/5',[NextController::class, 'next5'])->middleware('auth');
Route::get('/kuis/6',[NextController::class, 'next6'])->middleware('auth');
Route::get('/kuis/7',[NextController::class, 'next7'])->middleware('auth');
Route::get('/kuis/8',[NextController::class, 'next8'])->middleware('auth');
Route::get('/kuis/9',[NextController::class, 'next9'])->middleware('auth');
Route::get('/kuis/10',[NextController::class, 'next10'])->middleware('auth');

?>