<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// Importamos el controlador
use App\Http\Controllers\Api\JugadorController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//registro la ruta Jugadores
Route::get('/jugadores', [JugadorController::class, 'index']);