<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Degree extends Model
{
      use SoftDeletes;
      protected $fillable = [
   			'education_id',
   			'content',
   			'delay'
        ];

      public function school(){
      return $this->belongsTo('App\Education');
      }
}
