<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Products;
use App\User;

class TakeAway extends Model
{
    //
	protected $fillable = [
            				'address_id'=> 'required',      				
            				'user_id', 
            				'name',
            				'opening_time',
           				    'closing_time',
            				'website',
            				'mobile',
            				'phone',
                            'email',
                            'road',
                            'av',
                           // 'block',
                            'province',
                            'number',
                    	    'lat',
                            'lng'

    ];


    public function products(){
        
        return $this->hasMany('App\Products');
    }


    public function user(){
        
        return $this->belongsTo('App\User');
    }
}
