<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     public function orders_has_product()
    {
        return $this->belongsTo('App\Orders_has_product');
    }
    public function shoppingcar()
    {
        return $this->belongsTo('App\Shoppingcar');
    }
}
