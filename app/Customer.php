<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table="customer";
    public funciton bill(){
    	$this->hasMany('App\Bill','id_customer','id');
    }
    
}
