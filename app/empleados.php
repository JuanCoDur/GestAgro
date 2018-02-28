<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    protected $fillable = [
        'fin_id','nomemp','edademp','edocivil','depmenor','depmayor','discapacidades','domemp','telcasa','celemp','email','preparacion','sueldonto','cargo','jefedirecto','subordinados',
    ];
}
