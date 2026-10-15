<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ViajeroController; // Ya está importado

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Ruta para registrar personas
Route::post('/personas', [PersonaController::class, 'store']);

// ¡Faltaba esta línea! Ruta para registrar viajeros
Route::post('/registro-viajeros', [ViajeroController::class, 'store']);