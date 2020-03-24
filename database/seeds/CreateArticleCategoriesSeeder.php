<?php

use App\Models\Articlecategory;
use Illuminate\Database\Seeder;

class CreateArticleCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Articlecategory::create(
            [
                'name' => 'Update',
            ]
        );
        Articlecategory::create(
            [
                'name' => 'Promotion',
            ]
        );
    }
}
