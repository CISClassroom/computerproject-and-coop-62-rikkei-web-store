<?php

use Illuminate\Database\Seeder;
use App\Product;

class CreateProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create(
            [
                'name' => 'Nike Air Jordan 1 mid',
                'code' => 'naj-01',
                'price' => '150.00',
                'detail' => 'Nike Air Jordan 1 mid',
                'image_url' => 'images/products/upload/1581651354.jpg',
                'product_category_id' => '1',
                'product_type_id' => '1',
            ],
        );
        Product::create(
            [
                'name' => 'Nike Air Max 200',
                'code' => 'nam-01',
                'price' => '250.00',
                'detail' => 'Nike Air Max 200',
                'image_url' => 'images/products/upload/1581654263.jpg',
                'product_category_id' => '1',
                'product_type_id' => '1',
            ],
        );
        Product::create(
            [
                    'name' => 'Nike Air Monarch IV',
                    'code' => 'namo-01',
                    'price' => '179.00',
                    'detail' => 'Nike Air Monarch IV lifestyle-gym-shoe',
                    'image_url' => 'images/products/upload/1581654415.jpg',
                    'product_category_id' => '1',
                    'product_type_id' => '1',
                ],
        );
        Product::create(
            [
                'name' => 'Nike Epic React Flyknit 2',
                'code' => 'ner-01',
                'price' => '129.00',
                'detail' => 'Nike Epic React Flyknit 2 running shoe',
                'image_url' => 'images/products/upload/1581654725.jpg',
                'product_category_id' => '1',
                'product_type_id' => '1',
            ],
        );
        Product::create(
            [
                'name' => 'Nike Joyride Run Flyknit',
                'code' => 'njr-01',
                'price' => '130.00',
                'detail' => 'Nike Joyride Run Flyknit running shoe',
                'image_url' => 'images/products/upload/1581654741.jpg',
                'product_category_id' => '1',
                'product_type_id' => '1',
            ],
        );
        Product::create(
            [
                'name' => 'Nike Air Max 97',
                'code' => 'nam-02',
                'price' => '129.00',
                'detail' => 'Nike Air Max 97',
                'image_url' => 'images/products/upload/1581654751.jpg',
                'product_category_id' => '1',
                'product_type_id' => '1',
            ],
        );
        Product::create(
            [
                'name' => 'Nike React Infinity Run Flyknit',
                'code' => 'nri-01',
                'price' => '159.00',
                'detail' => 'Nike React Infinity Run Flyknit',
                'image_url' => 'images/products/upload/1581654758.jpg',
                'product_category_id' => '1',
                'product_type_id' => '1',
            ],
        );
        Product::create(
            [
                'name' => 'Nike Air Max 200',
                'code' => 'nam-01',
                'price' => '250.00',
                'detail' => 'Nike Air Max 200',
                'image_url' => 'images/products/upload/1581654263.jpg',
                'product_category_id' => '1',
                'product_type_id' => '1',
            ],
        );
    }
}
