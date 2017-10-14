<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //

    protected $fillable = [
    						'road',
                			'av',
                			'block',
                			'province',
                			'number']



    public function takeaways()
    {
        return $this->hasMany('App\takeaway');
    }
}
