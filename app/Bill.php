<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bills";
    public funciton bill_detail(){
    	$this->hasMany('App\BillDetail','id_bill','id');
    }
    public funciton bill(){
    	$this->belongsTo('App\Customer','id_customer','id');
    }
}
