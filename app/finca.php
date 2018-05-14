<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class finca extends Model
{
    protected $fillable = [
        'nomfinca', 'domfinca', 'telfinca', 'ciudad', 'estado','us_id',
    ];

    public function user(){
        $this->belongsTo('App\User', 'us_id');
    }
}
