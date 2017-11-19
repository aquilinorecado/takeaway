<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categories;
use App\TypeOfPayment;
use App\address;
use App\Subcategories;
use App\Products;

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


    public function produts(){
        
        return $this->hasMany('App\Products');
    }

}
