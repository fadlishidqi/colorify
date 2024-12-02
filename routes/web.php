<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ColorPaletteController;
use App\Http\Controllers\PresetController;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColorGeneratorController;

Route::get('/', [ColorGeneratorController::class, 'index']);
Route::post('/generate-palette', [ColorGeneratorController::class, 'generatePalette']);
Route::get('/presets', [PresetController::class, 'index'])->name('presets');
Route::get('/templates', [TemplateController::class, 'index'])->name('templates');
Route::get('/templates/{theme}', [TemplateController::class, 'getThemeTemplates']);

Route::post('/collections', [CollectionController::class, 'store'])->name('collections.store');
Route::get('/collections', [CollectionController::class, 'index'])->name('collections.index');
Route::get('/collection/{slug}', [CollectionController::class, 'show'])->name('collections.show');

Route::post('/collections/{collection}/palettes', [ColorPaletteController::class, 'store'])->name('collections.palettes.store');
Route::put('/collections/palettes/{palette}', [ColorPaletteController::class, 'update'])->name('collections.palettes.update');
Route::delete('/collections/palettes/{palette}', [ColorPaletteController::class, 'destroy'])->name('collections.palettes.destroy');
Route::get('/collections/palettes/{palette}', [ColorPaletteController::class, 'show'])->name('collections.palettes.show');