<?php

namespace App\Model\Intendencia;

use Illuminate\Database\Eloquent\Model;

class Compensacion extends Model
{
    protected $table = 'compensaciones';
    protected $fillable = [
        'tipo', 'fecha', 'horas', 'lugar_id', 'user_id'
    ];
    protected $guarded = ['id'];
}
