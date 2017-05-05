<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Section extends Model
{
      use SoftDeletes;
      protected $fillable = [
   			'title',
   			'content',
        ];


      public function sections(){
    	    return $this->belongsTo('App\Project');
	    }
}
