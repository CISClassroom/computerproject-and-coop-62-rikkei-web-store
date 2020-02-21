<?php

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class CreateProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCategory::create(
            [
                'name' => 'Lifestyle',
                'producttype_id' => '1',
            ]
        );
        ProductCategory::create(
            [
                'name' => 'Sandals & Flips Flops',
                'producttype_id' => '1',
            ]
        );
        ProductCategory::create(
            [
                'name' => 'Running',
                'producttype_id' => '1',
            ]
        );
        ProductCategory::create(
            [
                'name' => 'Football',
                'producttype_id' => '1',
            ]
        );
        ProductCategory::create(
            [
                'name' => 'Basketball',
                'producttype_id' => '1',
            ]
        );
        ProductCategory::create(
            [
                'name' => 'Gym & Training',
                'producttype_id' => '1',
            ]
        );
        ProductCategory::create(
            [
                'name' => 'Skateboarding',
                'producttype_id' => '1',
            ]
        );
        ProductCategory::create(
            [
                'name' => 'Tennis',
                'producttype_id' => '1',
            ]
        );
        ProductCategory::create(
            [
                'name' => 'Golf',
                'producttype_id' => '1',
            ]
        );
        ProductCategory::create(
            [
                'name' => 'Lifestyle',
                'producttype_id' => '2',
            ]
        );
        ProductCategory::create(
            [
                'name' => 'Sandals & Flips Flops',
                'producttype_id' => '2',
            ]
        );
        ProductCategory::create(
            [
                'name' => 'Running',
                'producttype_id' => '2',
            ]
        );
        ProductCategory::create(
            [
                'name' => 'Yoga',
                'producttype_id' => '2',
            ]
        );
        ProductCategory::create(
            [
                'name' => 'Football',
                'producttype_id' => '2',
            ]
        );
        ProductCategory::create(
            [
                'name' => 'Basketball',
                'producttype_id' => '2',
            ]
        );
        ProductCategory::create(
            [
                'name' => 'Gym & Training',
                'producttype_id' => '2',
            ]
        );
        ProductCategory::create(
            [
                'name' => 'Skateboarding',
                'producttype_id' => '2',
            ]
        );
        ProductCategory::create(
            [
                'name' => 'Tennis',
                'producttype_id' => '2',
            ]
        );
        ProductCategory::create(
            [
                'name' => 'Golf',
                'producttype_id' => '2',
            ]
        );

    }
}
