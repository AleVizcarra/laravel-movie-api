<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    // Definir los campos que son asignables de forma masiva
    protected $fillable = ['title', 'synopsis', 'year', 'cover'];
}
