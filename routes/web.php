<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\ServiceController;


Route::get('/service/form', [ServiceController::class, 'showForm'])->name('service.form');
Route::post('/service/save', [ServiceController::class, 'saveForm'])->name('service.save');