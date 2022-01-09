<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $fillable =["id_curso", "familia_profesional", "nombre_curso", "tipo_grado", "descripcion"];
}
