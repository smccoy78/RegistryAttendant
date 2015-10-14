<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('registries', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('attendee');
			$table->string('attendee_email');
			$table->integer('event_id');
			$table->timestamps();

			$table->foreign('event_id')
				  ->references('id')
				  ->on('events');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('registries');
	}

}
