<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoppingcar extends Model
{
    protected $fillable = ['amount','product_id','user_id'];
    public function user()
    {
        return $this->belongTo('App\User');
    }
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
    public function getTotalPrice() {
	    return $this->product->sum(function($product) {
	      return $this->amount * $product->price;
	    });
    }
}
