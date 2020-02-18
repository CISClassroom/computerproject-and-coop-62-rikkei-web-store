<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    public $table = 'productcategories';

    protected $fillable = [
        'name', 'producttype_id'
    ];
    public function products()
    {
        // return $this->hasMany('App\Models\Product'::class, 'productcategory_id');
        return $this->hasMany(Product::class);

    }
    public function type()
    {
        return $this->belongsTo(ProductType::class, 'producttype_id');
    }
}
