<?php

use App\Http\Controllers\ConsumptionController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/konsumsi', [ConsumptionController::class, 'index'])->name('konsumsi');