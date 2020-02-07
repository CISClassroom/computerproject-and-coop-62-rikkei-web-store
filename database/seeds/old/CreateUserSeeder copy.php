<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateUserSeederCopy extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // member
        $member_user = User::create([
        	'name' => 'Chayangkoon Tona',
        	'email' => 'aghostkiller@gmail.com',
            'password' => bcrypt('1419900652414'),
            'date_of_birth' => '1997-01-16',
            'gender' => 'Male',
            'newsletter' => '1',
        ]);

        $member_role = Role::create(['name' => 'member']);
        $member_permissions = Permission::pluck('id','id')->all();
        $member_role->syncPermissions($member_permissions);
        $member_user->assignRole([$member_role->id]);

        // sub admin
        $sub_admin_user = User::create([
        	'name' => 'sub admin',
        	'email' => 'aghostkiller@gmail.com',
            'password' => bcrypt('1419900652414'),
            'date_of_birth' => '1997-01-16',
            'gender' => 'Male',
            'newsletter' => '1',
        ]);

        $sub_admin_role = Role::create(['name' => 'sub-admin']);
        $sub_admin_permissions = Permission::pluck('id','id')->all();
        $sub_admin_role->syncPermissions($sub_admin_permissions);
        $sub_admin_user->assignRole([$sub_admin_role->id]);

        // super admin
        $super_admin_user = User::create([
        	'name' => 'super admin',
        	'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'date_of_birth' => '1997-01-16',
            'gender' => 'Male',
            'newsletter' => '1',
        ]);

        $super_admin_role = Role::create(['name' => 'super-admin']);
        $super_admin_permissions = Permission::pluck('id','id')->all();
        $super_admin_role->syncPermissions($super_admin_permissions);
        $super_admin_user->assignRole([$super_admin_role->id]);

    }
}
