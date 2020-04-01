<?php

namespace App\Model\Intendencia;

use Illuminate\Database\Eloquent\Model;

class Tipo_User extends Model
{
    protected $table = 'tipo_users';

    protected $fillable = [
        'nombre', 'descripcion'
    ];

    protected $guarded = ['id'];
}
