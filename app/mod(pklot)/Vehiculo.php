<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculo';
    protected $fillable = [
        'placa', 'marca','color',
    ];

    public function cliente(){
        $this->hasMany();
    }
}
