<?php

use Illuminate\Database\Seeder;
use log\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $data = array(
			[
				'name' 		=> 'Sejo', 
				'email' 	=> 'sergio@mail.com', 
				'password' 	=> \Hash::make('sejo'),
				'type' 		=> 'admin',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],
			[
				'name' 		=> 'Usuario2', 
				'email' 	=> 'sejo@mail.com', 
				'password' 	=> \Hash::make('sejobg'),
				'type' 		=> 'miembro',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],
		);
		User::insert($data);
    }
    
}
