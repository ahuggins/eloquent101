<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFilmActorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('film_actor', function(Blueprint $table)
		{
			$table->foreign('actor_id', 'fk_film_actor_actor')->references('actor_id')->on('actor')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('film_id', 'fk_film_actor_film')->references('film_id')->on('film')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('film_actor', function(Blueprint $table)
		{
			$table->dropForeign('fk_film_actor_actor');
			$table->dropForeign('fk_film_actor_film');
		});
	}

}
