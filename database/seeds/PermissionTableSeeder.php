<?php


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'manage',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'product-list',
            'product-create',
            'product-edit',
            'product-delete',
            'producttype-list',
            'producttype-create',
            'producttype-edit',
            'producttype-delete',
            'productcategory-list',
            'productcategory-create',
            'productcategory-edit',
            'productcategory-delete',
            'articlecategory-list',
            'articlecategory-create',
            'articlecategory-edit',
            'articlecategory-delete',
            'article-list',
            'article-create',
            'article-edit',
            'article-delete',
            'order-list',
            'order-create',
            'order-edit',
            'order-delete',
            'promotion-list',
            'promotion-create',
            'promotion-edit',
            'promotion-delete'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
