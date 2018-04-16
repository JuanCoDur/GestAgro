<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class compras extends Model
{
   protected $fillable = [
        'idFnca','idProv','fecCompra','totalCompra',
    ];
}
