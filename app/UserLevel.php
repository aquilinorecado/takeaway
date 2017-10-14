<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class UserLevel extends Model
{
    //

    protected $fillable = [
		        			'description', 
		        			'state'
    ];


    public function users(){
        
        return $this->hasMany('App\User');
    }
}
