<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_item extends Model
{
    use HasFactory;
    
    //belongs to functions 
    public function order()
    {
        return $this->belongsTo('App\Order');
    }
    
    
    
    //has Many fucntion
    public function product_descriptions()
    {
        return $this->hasMany('App\Product_description');
    }
}
