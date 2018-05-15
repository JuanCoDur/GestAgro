<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pozo extends Model
{
    protected $fillable = [
        'idFiin','pozo','medidor','ubicacionPzo','latitud','longitud','altitud',
    ];
}
