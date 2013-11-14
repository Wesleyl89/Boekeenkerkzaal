<?php

use Illuminate\Database\Migrations\Migration;

class CreateChurchesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('churches', function($table) {
			$table->increments('id');
			$table->string('churchname')->unique();
			$table->string('address');
			$table->string('zipcode', '7');
			$table->string('city');
			$table->string('phone');
			$table->string('email');
			$table->boolean('catering_license');
			$table->integer('user_id');
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
		Schema::drop('churches');
	}

}