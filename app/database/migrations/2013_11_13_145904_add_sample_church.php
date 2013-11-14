<?php

use Illuminate\Database\Migrations\Migration;

class AddSampleChurch extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('churches')->insert(array(
			'churchname'		=>'Test Kerk',
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
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('churches')->where('churchname', '=', 'Test Kerk')->delete();
	}

}