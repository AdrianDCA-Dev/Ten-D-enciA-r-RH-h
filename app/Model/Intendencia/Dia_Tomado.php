<?php

namespace App\Model\Intendencia;

use Illuminate\Database\Eloquent\Model;

class Dia_Tomado extends Model
{
    protected $table = 'dias_tomados';
    protected $fillable = [
        'fecha_inicio', 'fecha_fin', 'dias', 'dia_disponible_id'
    ];
    protected $guarded = ['id'];
}
