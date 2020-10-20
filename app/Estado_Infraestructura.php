<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado_Infraestructura extends Model
{
    protected $table = 'estado_infraestructura';
    protected $fillable = [
        'tipo_necesidad', 'descripcion','prioridad',
    ];
}
