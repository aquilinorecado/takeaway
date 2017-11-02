<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TakeAway;

class Products extends Model
{
    //

    protected $fillable = [
			            	'takeaway_id',
			            	'name',
			            	'user_id',
			            	'price',
			            	'description',
			            	'state'
    ];

    public function takeaway(){
        
        return $this->belongsTo('App\TakeAway');
    }
}
