<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fincas extends Model
{
    protected $fillable = [
        'nomfinca', 'domfinca', 'telfinca', 'ciudad', 'estado','us_id',
    ];
}
