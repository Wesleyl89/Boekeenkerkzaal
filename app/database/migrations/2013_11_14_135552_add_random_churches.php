<?php

use Illuminate\Database\Migrations\Migration;

class AddRandomChurches extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('churches')->insert(array(
			'churchname'		=>'Kerk2',
			'address'			=>'Testadress 34',
			'zipcode'			=>'1234 AB',
			'city'				=>'Testplaats',
			'phone'				=>'0612345678',
			'email'				=>'test@kerk.nl',
			'catering_license'	=>true,
			'user_id'			=>'1',
			'created_at'		=>date('Y-m-d H:m:s'),
			'updated_at'		=>date('Y-m-d H:m:s')
		));	

		DB::table('churches')->insert(array(
			'churchname'		=>'Kerk3',
			'address'			=>'Testadress 34',
			'zipcode'			=>'1234 AB',
			'city'				=>'Testplaats',
			'phone'				=>'0612345678',
			'email'				=>'test@kerk.nl',
			'catering_license'	=>false,
			'user_id'			=>'4',
			'created_at'		=>date('Y-m-d H:m:s'),
			'updated_at'		=>date('Y-m-d H:m:s')
		));	

		DB::table('churches')->insert(array(
			'churchname'		=>'Kerk4',
			'address'			=>'Testadress 34',
			'zipcode'			=>'1234 AB',
			'city'				=>'Testplaats',
			'phone'				=>'0612345678',
			'email'				=>'test@kerk.nl',
			'catering_license'	=>true,
			'user_id'			=>'5',
			'created_at'		=>date('Y-m-d H:m:s'),
			'updated_at'		=>date('Y-m-d H:m:s')
		));	

		DB::table('churches')->insert(array(
			'churchname'		=>'Kerk5',
			'address'			=>'Testadress 34',
			'zipcode'			=>'1234 AB',
			'city'				=>'Testplaats',
			'phone'				=>'0612345678',
			'email'				=>'test@kerk.nl',
			'catering_license'	=>false,
			'user_id'			=>'6',
			'created_at'		=>date('Y-m-d H:m:s'),
			'updated_at'		=>date('Y-m-d H:m:s')
		));	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('churches')->where('churchname', 'LIKE', 'Kerk%')->delete();
	}

}