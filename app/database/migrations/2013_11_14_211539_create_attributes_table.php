<?php

use Illuminate\Database\Migrations\Migration;

class CreateAttributesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attributes', function($table){
			$table->increments('id');
			$table->boolean('microphone')->default(false);
			$table->boolean('wireless_mic')->default(false);
			$table->boolean('audio_induction_loop')->default(false);
			$table->boolean('recording')->default(false);
			$table->boolean('mixers')->default(false);
			$table->boolean('beamers')->default(false);
			$table->boolean('monitors')->default(false);
			$table->boolean('screens')->default(false);
			$table->boolean('tv')->default(false);
			$table->boolean('printing')->default(false);
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
		Schema::drop('attributes');
	}

}