<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuizsController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\LeaderboardController;

Route::get('/', function () {
    return view('home-page',[
        'title' => 'HOME'
    ]);
})->middleware('auth')->name('HOME');
Route::get('/home', function () {
    return redirect('/');
});
Route::get('/profile', function () {
    return view('profile',[
        'title' => 'PROFILE'
    ]);
})->middleware('auth');

Route::get('/login',[UserController::class, 'login'])->middleware('guest')->name('login');

Route::post('/login',[UserController::class, 'autenticate'])->middleware('guest');

Route::post('/logout', [UserController::class, 'logout']);

Route::get('/registration',[UserController::class, 'registration'])->middleware('guest');

Route::post('/registration',[UserController::class, 'store'])->middleware('guest');

Route::get('/list-quiz',[QuizsController::class, 'quizs'])->middleware('auth');

Route::get('/quiz',[QuestionsController::class, 'question'])->middleware('auth');

Route::post('/quiz',[QuestionsController::class, 'answer'])->middleware('auth');

Route::get('/finish', [QuestionsController::class, 'finish'])->middleware('auth');

Route::get('/leaderboard', [LeaderboardController::class, 'leaderboard'])->middleware('auth');

Route::get('/image/logo-quiz.png', 'HomeController@displayImage');