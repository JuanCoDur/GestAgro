<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    protected $table = "proveedores";

    protected $fillable = [
        'RFCProv','nomProv','domProv','telProv','emailProv','empresaProv',
    ];
}
