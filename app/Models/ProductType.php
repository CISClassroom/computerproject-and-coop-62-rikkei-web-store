<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    public $table = 'producttypes';

    protected $fillable = [
        'name',
    ];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    
    public function categories()
    {
        return $this->hasMany(ProductCategory::class);
    }
}
