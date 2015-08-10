<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('participantes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('persona_id')->unsigned();
			$table->integer('establecimiento_id')->unsigned();
			$table->string('rol');
			$table->timestamps();

			$table->foreign('persona_id')->references('id')->on('personas')->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('establecimiento_id')->references('id')->on('establecimientos')->onUpdate('cascade');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('participantes');
	}

}
