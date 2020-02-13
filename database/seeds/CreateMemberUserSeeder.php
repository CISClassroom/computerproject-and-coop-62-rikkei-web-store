<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // member
        $user = User::create(
            [
                'name' => 'Chayangkoon Tona',
                'email' => 'member11@gmail.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1997-01-16',
                'gender' => 'Male',
                'newsletter' => '1',
                'role_id' => '3',
            ]
        );
        $user->assignRole('member');
        // $role = Role::select(['name' => 'member']);
        // $permissions = Permission::pluck('id','id')->all();
        // $role->syncPermissions($permissions);
        // $user->assignRole([$role->id]);

        $user1 = User::create(
            [
                'name' => 'Chayangkoon Tona',
                'email' => 'member1@gmail.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1997-01-16',
                'gender' => 'Male',
                'newsletter' => '1',
                'role_id' => '3',
            ]
        );
        $user1->assignRole('member');

        $user2 = User::create(
            [
                'name' => 'Chayangkoon Tona',
                'email' => 'member2@gmail.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1997-01-16',
                'gender' => 'Male',
                'newsletter' => '1',
                'role_id' => '3',
            ]
        );
        $user2->assignRole('member');

        $user3 = User::create(
            [
                'name' => 'Chayangkoon Tona',
                'email' => 'member3@gmail.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1997-01-16',
                'gender' => 'Male',
                'newsletter' => '1',
                'role_id' => '3',
            ]
        );
        $user3->assignRole('member');


    }
}
