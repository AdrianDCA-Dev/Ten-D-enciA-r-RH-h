<?php

namespace App\Model\Intendencia;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    protected $table = 'lugares';
    protected $fillable = [
        'nombre', 'descripcion'
    ];
    protected $guarded = ['id'];
}
