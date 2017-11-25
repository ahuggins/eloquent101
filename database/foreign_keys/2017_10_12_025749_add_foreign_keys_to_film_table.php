<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFilmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('film', function(Blueprint $table)
		{
			$table->foreign('language_id', 'fk_film_language')->references('language_id')->on('language')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('original_language_id', 'fk_film_language_original')->references('language_id')->on('language')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('film', function(Blueprint $table)
		{
			$table->dropForeign('fk_film_language');
			$table->dropForeign('fk_film_language_original');
		});
	}

}
