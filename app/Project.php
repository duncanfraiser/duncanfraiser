<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
      use SoftDeletes;
      protected $fillable = [
   			'name',
   			'img',
   			'link'
        ];


      public function sections(){
    	    return $this->hasMany('App\Section');
	    }


}
