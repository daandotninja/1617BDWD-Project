<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders_has_prduct extends Model
{
    public function order()
    {
        return $this->hasMany('App\Order');
    }
    public function product()
    {
        return $this->hasMany('App\Product');
    }
}
