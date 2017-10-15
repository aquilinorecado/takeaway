<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categories;
use App\TypeOfPayment;
use App\address;
use App\Subcategories;

class TakeAway extends Model
{
    //
	protected $fillable = [
            				'address_id', //Foreign Key 
            				'categorie_id', //Foreign Key
            				'user_id', //Foreign Key
            				'typeofpayment_id', //Foreign Key
            				'name',
            				'opening_time',
           					'closing_time',
            				'website',
            				'contact',
            				'phone',
            				'gmap'
    ];


    public function address()
    {
        return $this->belongsTo('App\Address');
    }

    public function categories(){
        
        return $this->belongsToMany('App\Categories');
    }

    public function typeofpayments(){
        
        return $this->belongsToMany('App\TypeOfPayment');
    }

    public function subcategories(){
        
        return $this->belongsToMany('App\Subcategories');
    }



}
