<?php

use Illuminate\Database\Migrations\Migration;

class AddChurchServices extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('services')->insert(
			array(
				array(
					'catering_license'	=> true,
					'catering'			=> true,
					'handicap_services'	=> true,
					'parking'			=> false,
					'wifi'				=> true,
					'furniture_movable' => false,
					'stage'				=> false,
					'church_id'			=> '1',
					'created_at'		=> date('Y-m-d H:m:s'),
					'updated_at'		=> date('Y-m-d H:m:s')
				),
				array(
					'catering_license'	=> true,
					'catering'			=> true,
					'handicap_services'	=> true,
					'parking'			=> false,
					'wifi'				=> true,
					'furniture_movable' => false,
					'stage'				=> false,
					'church_id'			=> '2',
					'created_at'		=> date('Y-m-d H:m:s'),
					'updated_at'		=> date('Y-m-d H:m:s')
				),
				array(
					'catering_license'	=> true,
					'catering'			=> true,
					'handicap_services'	=> true,
					'parking'			=> false,
					'wifi'				=> true,
					'furniture_movable' => false,
					'stage'				=> false,
					'church_id'			=> '3',
					'created_at'		=> date('Y-m-d H:m:s'),
					'updated_at'		=> date('Y-m-d H:m:s')
				),
				array(
					'catering_license'	=> true,
					'catering'			=> true,
					'handicap_services'	=> true,
					'parking'			=> false,
					'wifi'				=> true,
					'furniture_movable' => false,
					'stage'				=> false,
					'church_id'			=> '4',
					'created_at'		=> date('Y-m-d H:m:s'),
					'updated_at'		=> date('Y-m-d H:m:s')
				),
				array(
					'catering_license'	=> true,
					'catering'			=> true,
					'handicap_services'	=> true,
					'parking'			=> false,
					'wifi'				=> true,
					'furniture_movable' => false,
					'stage'				=> false,
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
		DB::table('services')->delete();
	}

}