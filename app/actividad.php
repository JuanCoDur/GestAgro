<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actividad extends Model
{
    protected $table = "actividades";

	protected $fillable = [
        'idFiinca','NomPredio','noLote','actividadRealizada','empleadosInvolucrados','tiempoEmpleado','vehInvolucrados',
        ];
}
