<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Education extends Model
{
      use SoftDeletes;
      protected $fillable = [
   			'school',
   			'kind',
   			
        ];


      public function degrees(){
        return $this->hasMany('App\Degree');
      }
}
