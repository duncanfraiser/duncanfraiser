<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Landing extends Model
{
      use SoftDeletes;
      protected $fillable = [
   			'img',
   			'about',
   			'serv',
   			'db',
            'backend',
   			'frontend',
   			'skill',
            'newTool'
        ];

      public function tools(){
         return $this->hasMany('App\Tool')->orderBy('name');
         }
}
