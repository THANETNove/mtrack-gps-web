<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeadHomeController;
use App\Http\Controllers\CustomerServiceController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ServiceFeatureController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\SatisfiedController;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    $dataHeadHomes = DB::table('head_homes')
        ->get();
    return view('welcome', compact('dataHeadHomes'));
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

Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');
Route::get('/about-us-create', [AboutUsController::class, 'create'])->name('about-us-create');
Route::post('/about-us-store', [AboutUsController::class, 'store'])->name('about-us-store');
Route::get('/about-us-edit/{id}', [AboutUsController::class, 'edit'])->name('about-us-edit');
Route::put('/about-us-update/{id}', [AboutUsController::class, 'update'])->name('about-us-update');

Route::get('/service-feature', [ServiceFeatureController::class, 'index'])->name('service-feature');
Route::get('/service-feature-create', [ServiceFeatureController::class, 'create'])->name('service-feature-create');
Route::post('/service-feature-store', [ServiceFeatureController::class, 'store'])->name('service-feature-store');
Route::get('/service-feature-edit/{id}', [ServiceFeatureController::class, 'edit'])->name('service-feature-edit');
Route::put('/service-feature-update/{id}', [ServiceFeatureController::class, 'update'])->name('service-feature-update');

Route::get('/carousel', [CarouselController::class, 'index'])->name('carousel');
Route::get('/carousel-create', [CarouselController::class, 'create'])->name('carousel-create');
Route::post('/carousel-store', [CarouselController::class, 'store'])->name('carousel-store');
Route::get('/carousel-edit/{id}', [CarouselController::class, 'edit'])->name('carousel-edit');
Route::put('/carousel-update/{id}', [CarouselController::class, 'update'])->name('carousel-update');

Route::get('/satisfied', [SatisfiedController::class, 'index'])->name('satisfied');
Route::get('/satisfied-create', [SatisfiedController::class, 'create'])->name('satisfied-create');
Route::post('/satisfied-store', [SatisfiedController::class, 'store'])->name('satisfied-store');
Route::get('/satisfied-edit/{id}', [SatisfiedController::class, 'edit'])->name('satisfied-edit');
Route::put('/satisfied-update/{id}', [SatisfiedController::class, 'update'])->name('satisfied-update');