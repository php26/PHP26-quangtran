<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// DB::statement('SET FOREIGN_KEY_CHECKS = 0');

     //    \DB::table('roles')->truncate();

     //    DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        $roleData= [
        	[
        		'id' => 1,
        		'name' => 'Admin',
        		'created_at' => date('Y-m-d H:i:s'),
        		'updated_at' => date('Y-m-d H:i:s')
        	],
        	[
        		'id' => 2,
        		'name' => 'User',
        		'created_at' => date('Y-m-d H:i:s'),
        		'updated_at' => date('Y-m-d H:i:s')
        	]
        ];
        Role::insert($roleData);
    }
}
