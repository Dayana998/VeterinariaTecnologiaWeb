<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Animales extends Model
{
    //protected $guarded = [];
//protected $guarded = [];
    protected $fillable = ['chip','name','raza','color','peso','genero','duenio_id'];
        protected $table  = 'animales';
       public function ent()
           {
               return $this->belongsTo('App\Duenios','duenio_id','id');
           }



        public function scopeName($query,$name)
         {
            if($name)
            {
                $query->where('name',"LIKE","%$name%");       
                 }

         }
         public function scopeChip($query,$chip)
         {
            if($chip)
            {
                $query->where('chip',"LIKE","%$chip%");       
                 }

         }

}