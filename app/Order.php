<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'product_id', 'qty', 'price', 'discount'
    ];
    
    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id');
    }
}
