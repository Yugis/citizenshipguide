<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\User')->create([
        	'name' => 'John Doe',
        	'email' => 'john@e.com',
        	'password' => bcrypt('password'),
        ]);
        factory('App\User')->create([
            'name' => 'Jane Doe',
            'email' => 'jane@e.com',
            'password' => bcrypt('password'),
            'is_admin' => true,
        ]);
    }
}
