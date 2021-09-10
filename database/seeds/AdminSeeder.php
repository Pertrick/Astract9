<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\User::create([
        	'name' => 'Admin',
        	'email' => 'admin@astract.com',
        	'password' => bcrypt('1234567'),
        	'admin' => 1,
        	'approved_at' => new DateTime(),
        	]);
    }
}
