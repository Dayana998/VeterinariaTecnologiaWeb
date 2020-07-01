<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Productos extends Model
{
    protected $fillable = ['id','name','precio','tipo','stock','foto'];
    protected $table='productos';
   
        public function scopeName($query,$name)
        {
            if($name)
            {
                $query->where('name',"LIKE","%$name%");
                 }

        }
    
}
