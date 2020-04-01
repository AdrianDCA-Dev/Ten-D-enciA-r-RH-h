<?php

namespace App\Model\Intendencia;

use Illuminate\Database\Eloquent\Model;

class Dia_Disponible extends Model
{
    protected $table = 'dias_disponibles';
    protected $fillable = [
        'estado', 'descripcion', 'compensacion_id'
    ];
    protected $guarded = ['id'];
}
