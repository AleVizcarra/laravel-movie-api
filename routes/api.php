<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Movie; // Incluimos el modelo
use App\Http\Controllers\MovieController; // Incluimos el controlador

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Definir la ruta GET para obtener todas las películas
Route::get('/movies', [MovieController::class, 'index']);

// Ruta para obtener un registro específico por ID (GET /api/movies/{id})
Route::get('/movies/{id}', [MovieController::class, 'show']);

// Ruta para agregar un nuevo registro a la base de datos
Route::post('/movies', [MovieController::class, 'post']);

// Ruta para actualizar un registro en base a su ID
Route::put('/movies/{id}', [MovieController::class, 'update']);

// Ruta para eliminar un registro en base a su ID
Route::delete('/movies/{id}', [MovieController::class, 'delete']);