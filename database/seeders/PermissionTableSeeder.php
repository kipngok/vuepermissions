<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    Permission::create(['name' => 'Create User']);
	Permission::create(['name' => 'View User']);
	Permission::create(['name' => 'Edit User']);
	Permission::create(['name' => 'Delete User']);

	Permission::create(['name' => 'Create Product']);
	Permission::create(['name' => 'View Product']);
	Permission::create(['name' => 'Edit Product']);
	Permission::create(['name' => 'Delete Product']);

	Permission::create(['name' => 'Create Customer']);
	Permission::create(['name' => 'View Customer']);
	Permission::create(['name' => 'Edit Customer']);
	Permission::create(['name' => 'Delete Customer']);

	Permission::create(['name' => 'Create Category']);
	Permission::create(['name' => 'View Category']);
	Permission::create(['name' => 'Edit Category']);
	Permission::create(['name' => 'Delete Category']);

	Permission::create(['name' => 'Create Role']);
	Permission::create(['name' => 'View Role']);
	Permission::create(['name' => 'Edit Role']);
	Permission::create(['name' => 'Delete Role']);
    }
}
