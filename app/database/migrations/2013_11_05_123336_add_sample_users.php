<?php

use Illuminate\Database\Migrations\Migration;

class AddSampleUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('users')->insert(array(
			'username'		=>'admin',
			'firstname'		=>'Wesley',
			'lastname'		=>'Lindhout',
			'email'			=>'test@test.nl',
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
		DB::table('users')->where('username', '=', 'admin')->delete();
	}

}