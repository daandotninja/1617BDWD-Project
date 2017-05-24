<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function orders_has_product()
    {
        return $this->belongsTo('App\Orders_has_product');
    }
    public function user()
    {
        return $this->hasMany('App\User');
    }
   

}
