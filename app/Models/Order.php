<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    //belongs to functions
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
    public function inventory()
    {
        return $this->belongsTo('App\Inventory');
    }
    
    
    
    //has Many functions
    public function order_items()
    {
        return $this->hasMany('App\Order_item');
    }
}
