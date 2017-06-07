<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Contact extends Model
{
	use SoftDeletes;
	protected $fillable = [
   			'name',
            'email',
            'subject',
            'body',
            'newContact'
    	    ];

      public static function newCons(){
      	$newCons=Contact::where('newContact','1')->count();;
        return $newCons;
      }

}