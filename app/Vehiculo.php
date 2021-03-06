<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculo';
    protected $fillable = [
        'placa', 'marca','color','cliente_id',
    ];

    public function cliente(){
        $this->belognTo(Cliente::class);
    }
}
