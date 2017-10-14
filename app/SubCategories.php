<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categorie;
use App\TakeAway;

class SubCategorie extends Model
{
    //

    protected $fillable = [
				            'description',
				            'categorie_id',
				            ' state'
    ];
    
    public function categorie(){
        
        return $this->belongsTo('App\Categorie');
    }

    public function takeways(){
        
        return $this->belongsToMany('App\TakeAway');
    }
}
}
