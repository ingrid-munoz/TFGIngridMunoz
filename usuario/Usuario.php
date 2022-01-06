<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    // RELACION N:m
    //public function eventos(){
    //    return $this->belongsToMany('App\Models\Evento');
    //}

}
