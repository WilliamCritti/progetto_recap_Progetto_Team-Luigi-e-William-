<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, "homepage"])->name('homepage');

Route::get('/show/{id}', [HomeController::class, 'show'])->name('show');