<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bullet extends Model
{
      use SoftDeletes;
      protected $fillable = [
   			'job_id',
   			'content',
   			'delay'
        ];


        public function job(){
         return $this->belongsTo('App\Job');
         }
}
