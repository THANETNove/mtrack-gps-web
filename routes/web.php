<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeadHomeController;
use App\Http\Controllers\CustomerServiceController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/head-home', [HeadHomeController::class, 'index'])->name('head-home');
Route::post('/head-home-store', [HeadHomeController::class, 'store'])->name('head-home-store');
Route::get('/head-home-edit/{id}', [HeadHomeController::class, 'edit'])->name('head-home-edit');
Route::put('/head-home-update/{id}', [HeadHomeController::class, 'update'])->name('head-home-update');

Route::get('/customer-service', [CustomerServiceController::class, 'index'])->name('customer-service');
Route::get('/create-customer-service', [CustomerServiceController::class, 'create'])->name('create-customer-service');
Route::post('/customer-service-store', [CustomerServiceController::class, 'store'])->name('customer-service-store');
Route::get('/customer-service-edit/{id}', [CustomerServiceController::class, 'edit'])->name('customer-service-edit');
Route::put('/customer-service-update/{id}', [CustomerServiceController::class, 'update'])->name('customer-service-update');