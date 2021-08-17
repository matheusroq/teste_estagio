<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['client_id'];

    public function products() {
        return $this->hasMany('App\Product', 'orders_products');
    }
}
