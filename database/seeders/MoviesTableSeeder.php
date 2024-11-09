<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie; // Importar el modelo Movie

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Limpiar la tabla antes de insertar nuevos datos
        Movie::truncate();

        // Crear una instancia de Faker
        $faker = \Faker\Factory::create();

        // Llenar la tabla con 10 registros de prueba
        for ($i = 0; $i < 10; $i++) {
            Movie::create([
                'title' => $faker->sentence,        // Título aleatorio
                'synopsis' => $faker->paragraph,    // Sinopsis aleatoria
                'year' => $faker->numberBetween(1900, 2024), // Año aleatorio entre 1900 y 2024
                'cover' =>  $faker->sentence, // URL de portada de imagen
            ]);
        }
    }
}
