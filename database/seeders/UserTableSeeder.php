<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	$role=Role::where('name','=','Admin')->first();
        DB::table('users')->insert([
            'name'=>'Admin',
			'email'=>'adminken@gmail.com',
			'role_id'=>$role->id,
			'email_verified_at'=>date('Y-m-d H:i:s'),
			'password'=>Hash::make('1234567890')
			
        ]);
        $user=User::find(1);
        $user->syncPermissions(['Create User','View User','Edit User','Delete User','Create Product','View Product','Edit Product','Delete Product','Create Customer','View Customer','Edit Customer','Delete Customer','Create Category','View Category','Edit Category','Delete Category','Create Role','View Role','Edit Role','Delete Role']);
    }
}
