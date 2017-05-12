<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Section extends Model
{
      use SoftDeletes;
      protected $fillable = [
   			'project_id',
   			'title',
   			'content',
   			'img',
        'ids'
        ];


      public function sections(){
    	    return $this->belongsTo('App\Project');
	    }
}
