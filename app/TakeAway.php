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
            				'address_id'=> 'required', //Foreign Key 
            				'categorie_id', //Foreign Key
            				'user_id', //Foreign Key
            				'typeofpayment_id', //Foreign Key
            				'name'=> 'required',
            				'opening_time',
           				    'closing_time',
            				'website',
            				'contact',
            				'phone',
            				'gmap'
    ];


    public function produts(){
        
        return $this->hasMany('App\Products');
    }

}
