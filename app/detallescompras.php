<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detallescompras extends Model
{
    protected $fillable = [
        'cantidadCom','precioCom','importeCom',
    ];
}
