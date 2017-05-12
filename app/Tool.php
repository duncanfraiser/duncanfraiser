<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tool extends Model
{
      use SoftDeletes;
      protected $fillable = [
   			'landing_id',
   			'name',
   			'delay',
   			'direction'
        ];


        public function land(){
         return $this->belongsTo('App\landing');
         }
}
