<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
App\TakeAway;

class TypeOfPayment extends Model
{
    //

    protected $fillable = [
			            	'description',
			            	'state'
    ];

    public function takeaway(){
        
        return $this->belongsToMany('App\TakeAway');
    }
}
