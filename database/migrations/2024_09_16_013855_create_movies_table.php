<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title'); // Campo de tipo string para el título
            $table->text('synopsis'); // Campo de tipo text para la sinopsis
            $table->integer('year'); // Campo de tipo integer para el año
            $table->string('cover'); // Campo de tipo string para la portada
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
