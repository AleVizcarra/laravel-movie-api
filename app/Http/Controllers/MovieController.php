<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    // Función GET de todas las películas
    public function index()
    {
        // Obtener todas las películas desde el modelo Movie
        $movies = Movie::all();

        // Retornar las películas en formato JSON
        return response()->json($movies);
    }

    // Función para obtener una película en específico
    public function show($id)
    {
        // Buscar el registro por su ID
        $movie = Movie::find($id);

        // Si el registro no existe, devolver un error 404
        if (!$movie) {
            return response()->json(['message' => 'Película no encontrada'], 404);
        }

        // Si el registro existe, devolverlo en formato JSON
        return response()->json($movie);
    }

    // Función para agregar un nuevo registro
    public function post(Request $request)
    {
        // Validar los datos recibidos
        $request->validate([
            'title' => 'required|string|max:255',
            'synopsis' => 'required|string|max:500',
            'year' => 'required|integer',
            'cover' => 'required|string|max:255',
        ]);

        // Crear una nueva película en la base de datos
        $movie = Movie::create([
            'title' => $request->title,
            'synopsis' => $request->synopsis,
            'year' => $request->year,
            'cover' => $request->cover,
        ]);

        // Retornar respuesta de éxito
        return response()->json(['message' => 'Película agregada exitosamente', 'data' => $movie], 201);

    }

    // Función para actualizar un registro
    public function update(Request $request, $id)
    {
        // Validar los datos recibidos
        $request->validate([
            'title' => 'sometimes|string|max:255', // 'sometimes' significa que es opcional
            'synopsis' => 'sometimes|string|max:500',
            'year' => 'sometimes|integer',
            'cover' => 'sometimes|string|max:255',
        ]);

        // Buscar la película por ID
        $movie = Movie::findOrFail($id);

        // Actualizar los datos de la película
        $movie->update($request->all());

        // Retornar respuesta de éxito
        return response()->json(['message' => 'Película actualizada exitosamente', 'data' => $movie], 200);
    }

    // Función para eliminar un registro
    public function delete($id)
    {
        // Buscar la película por ID y eliminarla
        $movie = Movie::findOrFail($id);
        $movie->delete();

        // Retornar respuesta de éxito
        return response()->json(['message' => 'Película eliminada exitosamente'], 200);
    }

}

