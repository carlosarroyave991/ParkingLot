<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo_Has_Users extends Model
{

    protected $fillable = [
        'vehiculo_id','usuario_id',
    ];
}
