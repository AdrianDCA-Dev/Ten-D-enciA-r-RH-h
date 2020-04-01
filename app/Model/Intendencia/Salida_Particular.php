<?php

namespace App\Model\Intendencia;

use Illuminate\Database\Eloquent\Model;

class Salida_Particular extends Model
{
    protected $table = 'salidas_particulares';
    protected $fillable = [
        'horas', 'descripcion', 'fecha', 'user_id'
    ];
    protected $guarded = ['id'];
}
