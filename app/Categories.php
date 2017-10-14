<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubCategorie;
use App\takeaway;

class Categorie extends Model
{
    //

    protected $fillable = [
			            	'description',
			            	'state'
    ];


    public function subcategories(){
        
        return $this->hasMany('App\SubCategorie');
    }

    public function takeawes(){
        
        return $this->hasMany('App\takeaway');
    }
}
