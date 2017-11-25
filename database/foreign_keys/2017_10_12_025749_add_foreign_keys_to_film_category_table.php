<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFilmCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('film_category', function(Blueprint $table)
		{
			$table->foreign('category_id', 'fk_film_category_category')->references('category_id')->on('category')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('film_id', 'fk_film_category_film')->references('film_id')->on('film')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('film_category', function(Blueprint $table)
		{
			$table->dropForeign('fk_film_category_category');
			$table->dropForeign('fk_film_category_film');
		});
	}

}
