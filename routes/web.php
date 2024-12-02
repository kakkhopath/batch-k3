<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
 */

//Groupe Route Controller
Route::controller(HomeController::class)->group(function () {
    Route::get('/','index');
    Route::get('/about-us','about_us');
    Route::get('/services','services');
});
