<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehiculo extends Model
{
	protected $fillable = [
        'idTipoV','idFinca', 'idmarc','Marca','Combustible','Rendimiento','ModeloVeh','yearFabricacion','Adepreciacion','ValorActVeh','Placa',
    ];
    
}
