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
        'direccion',
    ];

    public function vehiculo_has_users(){
        $this->hasMany('cliente_id','foreign_key');
    }

    /**public function vehiculo(){
        $this->hasMany();
    }**/
}
