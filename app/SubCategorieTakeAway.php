<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TakeAway;
use App\SubCategories;

class SubCategorieTakeAway extends Model
{
    //

    public function takeways(){
        
        return $this->belongsToMany('App\TakeAway');
    }

    public function SubCategories(){
        
        return $this->belongsToMany('App\SubCategories');
    }
}
