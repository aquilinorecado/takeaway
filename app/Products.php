<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TakeAway;
Use App\User;
use App\Extras;

class Products extends Model
{
    //

    protected $fillable = [
			            	'takeaway_id'=> 'required',
			            	'name'=> 'required',
			            	'user_id'=> 'required',
			            	'price'=> 'required',
			            	'description',
			            	'state'
    ];

    public function takeaway(){
        
        return $this->belongsTo('App\TakeAway');
    }

    public function products(){
        
        return $this->belongsTo('App\User');
    }

    public function extras(){
        
        return $this->belongsToMany('App\Extras');
    }
}
