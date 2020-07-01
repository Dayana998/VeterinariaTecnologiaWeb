<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Reservas extends Model
{
    //
    protected $fillable = ['id','duenio_id','id_animales','phone','date'];
    protected $table  = 'reservas';

    public function ent()
    {
        return $this->belongsTo('App\Duenios','duenio_id','id');
    }
    public function ani()
    {
        return $this->belongsTo('App\Animales','id_animales','id');
    }

    public function scopeDate($query,$date)
    {
       if(trim($date)!="")
       {
           $query->where(DB::raw("CONCAT(date,'',duenio_id)"),"LIKE","%$date%");
       }
    }
    public function scopeChip($query,$chip)
    {
       if(trim($chip)!="")
       {
           $query->where(DB::raw("CONCAT(id_animales,'',duenio_id)"),"LIKE","%$chip%");
       }
    }
}
