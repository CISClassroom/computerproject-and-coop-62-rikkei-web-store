<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPost extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = false;

}
