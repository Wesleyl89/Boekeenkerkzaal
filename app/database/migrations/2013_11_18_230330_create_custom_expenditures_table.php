<?php

use Illuminate\Database\Migrations\Migration;

class CreateCustomExpendituresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('custom_expenditures', function($table) {
			$table->increments('id');
			$table->string('custom_expenditure_name');
			$table->integer('price_per_unit')->default(0);
			$table->integer('church_id')->default(0);
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
		Schema::drop('custom_expenditures');
	}

}