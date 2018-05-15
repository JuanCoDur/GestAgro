<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clasificacion extends Model
{
    protected $table = "clasificaciones";
    protected $fillable = [
        'nomClasif',
    ];
}
