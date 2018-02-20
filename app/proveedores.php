<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedores extends Model
{
    protected $fillable = [
        'RFCProv','nomProv','domProv','telProv','emailProv','empresaProv',
    ];
}
