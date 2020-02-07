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
        $user = User::create([
        	'name' => 'Chayangkoon Tona',
        	'email' => 'member@gmail.com',
            'password' => bcrypt('123456'),
            'date_of_birth' => '1997-01-16',
            'gender' => 'Male',
            'newsletter' => '1',
            'role_id' => '1',
        ]);

        $role = Role::create(['name' => 'member']);
        // $permissions = Permission::pluck('id','id')->all();
        // $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
        }
}
