<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    //
    protected $fillable = ['productos_id','duenio_id','precio','cantidad'];
        
    protected $table='ventas';
}
