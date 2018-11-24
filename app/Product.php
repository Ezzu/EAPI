<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'stock', 'discount'];
    
    public function reviews(){
        return $this->hasMany('App\Review');
    }

}
