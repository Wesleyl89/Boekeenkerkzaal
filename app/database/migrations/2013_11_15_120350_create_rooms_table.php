<?php

use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rooms', function($table) {
			$table->increments('id');
			$table->string('roomname');
			$table->string('room_description');
			$table->integer('number_of_people');
			$table->integer('min_price')->default(0);
			$table->integer('max_price')->default(0);
			$table->integer('church_id');
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
		Schema::drop('rooms');
	}

}