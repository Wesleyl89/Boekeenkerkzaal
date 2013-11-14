<?php

use Illuminate\Database\Migrations\Migration;

class AddChurchAttributes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('attributes')->insert(
			array(
				array(
					'church_id'			=> '1',
					'created_at'		=> date('Y-m-d H:m:s'),
					'updated_at'		=> date('Y-m-d H:m:s')
				),
				array(
					'church_id'			=> '2',
					'created_at'		=> date('Y-m-d H:m:s'),
					'updated_at'		=> date('Y-m-d H:m:s')
				),
				array(
					'church_id'			=> '3',
					'created_at'		=> date('Y-m-d H:m:s'),
					'updated_at'		=> date('Y-m-d H:m:s')
				),
				array(
					'church_id'			=> '4',
					'created_at'		=> date('Y-m-d H:m:s'),
					'updated_at'		=> date('Y-m-d H:m:s')
				),
				array(
					'church_id'			=> '5',
					'created_at'		=> date('Y-m-d H:m:s'),
					'updated_at'		=> date('Y-m-d H:m:s')
				)
			)
		);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('attributes')->delete();
	}

}