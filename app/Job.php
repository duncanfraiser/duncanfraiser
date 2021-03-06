<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
      use SoftDeletes;
      protected $fillable = [
   			'company',
   			'title',
   			'startDate',
   			'endDate',
        ];


      public function bullets(){
        return $this->hasMany('App\Bullet');
      }




}
