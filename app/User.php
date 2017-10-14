<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\UserLevel;
use App\Address;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
                            'name', 
                            'email', 
                            'password', 
                            'userlevel_id',
                            'contact',
                            'phone',
                            'email',
                            'address_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
                            'password', 
                            'remember_token',
    ];


    public function userlevel(){
        
        return $this->belongsTo('App\UserLevel');
    }

    public function address(){
        
        return $this->belongsTo('App\Address');
    }
}
