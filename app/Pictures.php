<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Products;


class Pictures extends Model
{
    //

   protected $fillable = [
			            	'address'=> 'required',
			            	'app_id'=> 'required',
			            	'app_code'=> 'required'
    ];


    public function product(){
        
        return $this->belongsTo('App\Products');
    }


}
