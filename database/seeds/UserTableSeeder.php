<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */

	public function run()
	{
		User::create([
			'name'		=>'Osmell Caicedo',
			'email'		=>'correo@algo.com',
			'password'	=>\Hash::make('secret'),
			'type'		=>'2'
			]);
		
		// $this->call('UserTableSeeder');
	}

}
