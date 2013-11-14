<?php

use Illuminate\Database\Migrations\Migration;

class AddChurchColumn extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('churches', function($table) {
			$table->string('website');
		});	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('churches', function($table)
		{
		    $table->dropColumn('website');
		});
	}

}