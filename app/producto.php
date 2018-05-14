<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $fillable = [
        'idClasif','nomProducto','descripcion','costo','preciovta',
    ];
}
