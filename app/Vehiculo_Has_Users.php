<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo_Has_Users extends Model
{
    protected $table = 'vehiculo_has_users';
    protected $fillable = [
        'vehiculo_id','usuario_id',
    ];
}
