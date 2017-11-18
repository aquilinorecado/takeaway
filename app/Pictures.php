<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Pictures extends Model
{
    //

   protected $fillable = [
			            	'address'=> 'required',
			            	'app_id'=> 'required',
			            	'app_code'=> 'required'
    ];

}
