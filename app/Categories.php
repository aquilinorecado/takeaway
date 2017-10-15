<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubCategorie;
use App\takeaway;

class Categories extends Model
{
    //

    protected $fillable = [
			            	'description',
			            	'state'
    ];


    public function subcategories(){
        
        return $this->hasMany('App\SubCategories');
    }

    public function takeawes(){
        
        return $this->hasMany('App\takeaway');
    }
}
