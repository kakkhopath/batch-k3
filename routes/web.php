<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ComponentController;

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
 */
//Groupe Route Controller
Route::controller(HomeController::class)->group(function () {
    Route::get('/old_task', 'index');
    Route::get('/about-us', 'about_us');
    Route::get('/services/{value}', 'services');
});
//New Assignment 2 Task For Commponent Wise

Route::controller(ComponentController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/portfolio', 'portfolio')->name('portfolio');
});
