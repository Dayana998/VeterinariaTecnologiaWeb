<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	//protected $guarded = ['id', 'approved', 'created_at', 'updated_at'];
	protected $guarded = [];
	//protected $fillable = ['title', 'url', 'description'];
	public function getRouteKeyName()
	{
		//return 'title';
		return 'url';
	}
    //protected $table = 'projects';
}
