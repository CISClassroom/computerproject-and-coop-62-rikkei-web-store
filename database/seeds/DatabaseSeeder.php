<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionTableSeeder::class);
        $this->call(CreateAdminUserSeeder::class);
        $this->call(CreateManagerUserSeeder::class);
        $this->call(CreateMemberUserSeeder::class);
        $this->call(CreateProductTypesSeeder::class);
        $this->call(CreateProductCategoriesSeeder::class);
        $this->call(CreateProductSeeder::class);
        // $this->call(UserTableSeeder::class);
    }
}
