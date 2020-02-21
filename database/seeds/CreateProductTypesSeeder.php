<?php

use App\Models\ProductType;
use Illuminate\Database\Seeder;

class CreateProductTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductType::create(
            [
                'name' => 'Mens Shoes',
                'name' => 'Womens Shoes',
                'name' => 'Boys Shoes',
                'name' => 'Girls Shoes',
            ]
        );
    }
}
