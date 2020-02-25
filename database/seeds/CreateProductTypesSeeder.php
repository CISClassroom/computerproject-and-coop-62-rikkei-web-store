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
                'name' => 'Mens shoes',
                'name' => 'Womens shoes',
                'name' => 'All gender adults shoes',
                'name' => 'Boys shoes',
                'name' => 'Girls shoes',
                'name' => 'All gender kids shoes',
            ]
        );
    }
}
