<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiamondController;

Route::get('/diamonds', [DiamondController::class, 'index']);
Route::get('/diamonds/create', [DiamondController::class, 'create']);
Route::post('/diamonds', [DiamondController::class, 'store']);