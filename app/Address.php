<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\takeaway;

class Address extends Model
{
    //

    protected $fillable = [
    					    'road',
                			'av',
                			'block'=> 'required',
                			'province'=> 'required',
                			'number'=> 'required',];



    public function takeaways()
    {
        return $this->hasMany('App\takeaway');
    }
}
