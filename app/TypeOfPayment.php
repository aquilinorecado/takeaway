<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TakeAway;

class TypeOfPayment extends Model
{
    //

    protected $fillable = [
			            	'description',
			            	'state'
    ];

    public function takeaways(){
        
        return $this->belongsToMany('App\TakeAway');
    }
}
