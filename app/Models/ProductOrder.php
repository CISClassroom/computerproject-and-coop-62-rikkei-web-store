<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    protected $fillable = [
        'order_id', 'product_id', 'color', 'size', 'quantity',
    ];

    protected $hidden = [
        'order_id', 'product_id',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
