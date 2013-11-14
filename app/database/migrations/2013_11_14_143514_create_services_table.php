<?php

use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('services', function($table){
			$table->increments('id');
			$table->boolean('catering_license')->default(false);
			$table->boolean('catering')->default(false);
			$table->boolean('handicap_services')->default(false);
			$table->boolean('parking')->default(false);
			$table->boolean('wifi')->default(false);
			$table->boolean('furniture_movable')->default(false);
			$table->boolean('stage')->default(false);
			$table->integer('church_id')->default(false);
			$table->timestamps();
		});	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('services');
	}

}