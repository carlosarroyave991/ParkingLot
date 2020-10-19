<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrada_Salida extends Model
{
    protected $table = 'entrada_salida';

    protected $fillable = [
        'estado', 'hora_entrada','hora_salida','vehiculo_id','usuario_id',
    ];

    protected $casts = [
        'hora_entrada' => 'datetime',
        'hora_salida'=> 'datetime',
    ];

    public function vehiculo()
    {
        return $this->belongsTo('Vehiculo');
    }

    public function user()
    {
        return $this->belongsTo('user');
    }
}
