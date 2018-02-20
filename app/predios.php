<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class predios extends Model
{
	protected $fillable = [
        'idFin','nombrePredio','numLote','superficie','regimenHumedad','tipRiego','latitud','longitud','altitud','observaciones',
    ];
    
}
