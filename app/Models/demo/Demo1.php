<?php

namespace App\Models;

class Demo1 implements IModel
{
    public function sayHello()
    {
        echo "Hello PgSQL";
    }
}
