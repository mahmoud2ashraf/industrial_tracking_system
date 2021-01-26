<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    
    //belongs to functions
    public function factory()
    {
        return $this->belongsTo('App\Factory');
    }
    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
    
    //has Many functions
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
    public function employees()
    {
        return $this->hasMany('App\Employee');
    }
}
