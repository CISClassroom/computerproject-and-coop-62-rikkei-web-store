<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'code', 'price', 'detail', 'image_url', 'name', 'detail', 'productcategory_id', 'producttype_id',
    ];


    protected $hidden = [
        'productcategory_id', 'producttype_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        // 'product_create_at' => 'datetime',
    ];

    public function promotionProduct()
    {
        return $this->hasMany(PromotionProduct::class);
    }

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'productcategory_id');
    }

    public function type()
    {
        return $this->belongsTo(ProductType::class, 'producttype_id');
    }
}
