<?php

use Illuminate\Database\Migrations\Migration;

class CreateRandomUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('users')->insert(array(
			'username'		=>'user1',
			'firstname'		=>'Wesley',
			'lastname'		=>'Lindhout',
			'email'			=>'user1@test.nl',
			'password'		=>Hash::make('admin'),
			'last_login'	=>date('Y-m-d H:m:s'),			
			'created_at'	=>date('Y-m-d H:m:s'),
			'updated_at'	=>date('Y-m-d H:m:s')
		));

		DB::table('users')->insert(array(
			'username'		=>'user2',
			'firstname'		=>'Wesley',
			'lastname'		=>'Lindhout',
			'email'			=>'user2@test.nl',
			'password'		=>Hash::make('admin'),
			'last_login'	=>date('Y-m-d H:m:s'),			
			'created_at'	=>date('Y-m-d H:m:s'),
			'updated_at'	=>date('Y-m-d H:m:s')
		));

		DB::table('users')->insert(array(
			'username'		=>'user3',
			'firstname'		=>'Wesley',
			'lastname'		=>'Lindhout',
			'email'			=>'user3@test.nl',
			'password'		=>Hash::make('admin'),
			'last_login'	=>date('Y-m-d H:m:s'),			
			'created_at'	=>date('Y-m-d H:m:s'),
			'updated_at'	=>date('Y-m-d H:m:s')
		));

		DB::table('users')->insert(array(
			'username'		=>'user4',
			'firstname'		=>'Wesley',
			'lastname'		=>'Lindhout',
			'email'			=>'user4@test.nl',
			'password'		=>Hash::make('admin'),
			'last_login'	=>date('Y-m-d H:m:s'),			
			'created_at'	=>date('Y-m-d H:m:s'),
			'updated_at'	=>date('Y-m-d H:m:s')
		));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('users')->where('username', '=', 'user%')->delete();
	}

}