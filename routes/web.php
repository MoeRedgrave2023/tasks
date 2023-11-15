<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\CustomAuthController;

Route::get('/login', [CustomAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [CustomAuthController::class, 'login']);
Route::get('/signup', [CustomAuthController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [CustomAuthController::class, 'signup']);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\ServiceController;


Route::get('/service/form', [ServiceController::class, 'showForm'])->name('service.form');
Route::post('/service/save', [ServiceController::class, 'saveForm'])->name('service.save');