<?php

namespace App\Models;

class Demo implements IModel
{
    public function sayHello()
    {
        echo "Hello Mysql";
    }
}
