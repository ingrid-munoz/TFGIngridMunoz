<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    // Representar los datos con validaciones
    static $rules=[
        'title'=>'required',
        'descripcion'=>'required',
        'start'=>'required',
    ];

    // Campos con los que trabajamos
    protected $fillable=['title','descripcion','start'];

    // RELACION N:m
    //public function usuarios(){
    //    return $this->belongsToMany('App\Models\Usuario');
    //}


}
