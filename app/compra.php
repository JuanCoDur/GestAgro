<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class compra extends Model
{
    protected $fillable=[
    	'idFnca',
    	'idProv',
    	'fecCompra',
    	'totalCompra'
    ];
}
