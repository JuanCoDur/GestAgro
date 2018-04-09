<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actividades extends Model
{
	protected $fillable = [
        'idFiinca','NomPredio','noLote','actividadRealizada','empleadosInvolucrados','tiempoEmpleado','vehInvolucrados',
        ];
}
