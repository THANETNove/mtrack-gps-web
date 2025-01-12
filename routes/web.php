<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeadHomeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/head-home', [HeadHomeController::class, 'index'])->name('head-home');
Route::post('/head-home-store', [HeadHomeController::class, 'store'])->name('head-home-store');