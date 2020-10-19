<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';

    protected $fillable = [
        'cedula',
        'nombres',
        'apellidos',
        'correo',
        'telefono',
        'foto',
        'direccion'
    ];

    public function entrada_salida(){
        return $this->hasMany('entrada_salida');
    }
}
