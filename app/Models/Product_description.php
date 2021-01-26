<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_description extends Model
{
    use HasFactory;
    
    //belongs to functions
      public function order_item()
    {
        return $this->belongsTo('App\Order_item');
    }
    
    
    
    
    //has Many function
    public function products(){

    return $this->hasMany('App\Product');
    }
}
