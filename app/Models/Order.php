<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'address_id', 'subtotal', 'shipping', 'discount', 'sumtotal', 'paymentoption',
    ];

    protected $hidden = [
        'user_id', 'address_id',
    ];

    public function productOrder()
    {
        return $this->hasMany(ProductOrder::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function address()
    {
        return $this->belongsTo(Address::class, 'address_id');
    }
}
