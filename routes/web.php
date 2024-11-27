<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColorGeneratorController;

Route::get('/color-generator', [ColorGeneratorController::class, 'index']);
Route::post('/generate-palette', [ColorGeneratorController::class, 'generatePalette']);