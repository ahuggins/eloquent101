<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilmActorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('film_actor', function(Blueprint $table)
		{
			$table->smallInteger('actor_id')->unsigned();
			$table->smallInteger('film_id')->unsigned()->index('idx_fk_film_id');
			$table->timestamps();
			$table->primary(['actor_id','film_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('film_actor');
	}

}
