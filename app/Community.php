<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Community extends Model
{
      use SoftDeletes;
      protected $fillable = [
   			'title',
   			'content'
   			];
}
