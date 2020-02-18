<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    $users = factory(App\Models\User::class, 15)->make()->toArray();

    foreach ($users as $user) {
        App\Models\User::create($user);
    }
}
}
