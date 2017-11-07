<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Products;

class Extras extends Model
{
    //

    public function products(){
        
        return $this->belongsToMany('App\Products');
    }
}
