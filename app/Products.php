<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TakeAway;
Use App\User;

class Products extends Model
{
    //
    //use \Conner\Tagging\Taggable; 

    protected $fillable = [
			            	'take_away_id'=> 'required',
			            	'name'=> 'required',
			            	'user_id'=> 'required',
			            	'price'=> 'required',
			            	'description',
			            	'state',
                            'image1'=> 'required',
                            'image2'=> 'required',
                            'image3'=> 'required',
    ];

    public function takeaway(){
        
        return $this->belongsTo('App\TakeAway');
    }

    public function user(){
        
        return $this->belongsTo('App\User');
    }

    public function pictures(){
        
        return $this->hasMany('App\Pictures');
    }
}
