<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    //belongs to functions
    public function factory()
    {
        return $this->belongsTo('App\Factory');
    }
    
    
    //has Many functions
}
