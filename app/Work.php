<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
      use SoftDeletes;
      protected $fillable = [
   			'name',
        ];


      public function sections(){
        return $this->hasMany('App\Section');
    }
}
