<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = ['title','img','year','price', 'description'];
     public function orders_has_product()
    {
        return $this->hasMany('App\Orders_has_product');
    }
    public function shoppingcar()
    {
        return $this->hasMany('App\Shoppingcar');
    }
}
