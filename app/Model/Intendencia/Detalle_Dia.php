<?php

namespace App\Model\Intendencia;

use Illuminate\Database\Eloquent\Model;

class Detalle_Dia extends Model
{
    protected $table = 'detalle_dias';
    protected $fillable = [
        'dia_disponible_id', 'dia_tomado_id'
    ];
}
