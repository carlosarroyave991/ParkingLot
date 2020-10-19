<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parqueadero extends Model
{

    protected $fillable = [
        'nombre', 'capacidad_vehiculos','cupos_disponibles','direccion',
    ];
}
