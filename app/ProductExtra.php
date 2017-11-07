<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Products;
use App\Extras;

class ProductExtra extends Model
{
    //
	protected $fillable = [
			            	'product_id'=> 'required',
			            	'extra_id'=> 'required',
			            	'state'=> 'required'
    ];


    public function products(){
        
        return $this->belongsToMany('App\Products');
    }

    public function extras(){
        
        return $this->belongsToMany('App\Extras');
    }
}
