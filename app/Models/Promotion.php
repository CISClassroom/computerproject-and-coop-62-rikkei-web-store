<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $fillable = [
        'title', 'discount_percent', 'max_discount', 'min_purchase', 'max_purchase', 'start_at', 'end_at', 'event_id',
    ];


    protected $hidden = [
        'event_id',
    ];

    // public function promotionProduct()
    // {
    //     return $this->hasMany(PromotionProduct::class);
    // }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'promotion_products', 'promotion_id', 'product_id')
            ->withPivot('promotion_id', 'product_id');
    }
}
