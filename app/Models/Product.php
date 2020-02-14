<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'code', 'price', 'detail', 'image_url', 'name', 'detail', 'product_category_id', 'product_type_id',
    ];


    protected $hidden = [
        'product_category_id', 'product_type_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        // 'product_create_at' => 'datetime',
    ];
}
