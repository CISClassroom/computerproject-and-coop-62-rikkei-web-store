<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'detail', 'image_url', 'articlecategory_id',
    ];

    public function category()
    {
        return $this->belongsTo(ArticleCategory::class, 'articlecategory_id');
    }
}
