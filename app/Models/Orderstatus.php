<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orderstatus extends Model
{
    protected $fillable = [
        'name'
    ];


    protected $hidden = [

    ];


    protected $casts = [
       
    ];

    public function order()
    {
        return $this->hasMany(Order::class);
    }

}
