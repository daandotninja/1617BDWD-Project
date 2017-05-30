<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $fillable = ['status'];
    public function orders_has_products()
    {
        return $this->hasMany('App\Orders_has_product');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function getTotalPrice() {
	    return $this->orders_has_products->sum(function($orders_has_product) {
	      return $orders_has_product->amount * $orders_has_product->price;
	    });
    }
}
   


