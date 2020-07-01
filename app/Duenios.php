<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Duenios extends Model
{
    ///protected $guarded =[];
    protected $table  = 'duenios';
    protected $fillable = ['ci','name','lastname','address','phone','email','genero'];


    public function scopeName($query,$name)
    {
       if(trim($name)!="")
       {
           $query->where(DB::raw("CONCAT(name,'',lastname)"),"LIKE","%$name%");
       }
    }
}
