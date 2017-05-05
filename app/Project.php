<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
      use SoftDeletes;
      protected $fillable = [
   			'name',
        ];


      public function sections(){
    	    return $this->hasMany('App\Section');
	    }


}
