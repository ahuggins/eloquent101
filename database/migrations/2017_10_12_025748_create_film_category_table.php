<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilmCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('film_category', function(Blueprint $table)
		{
			$table->smallInteger('film_id')->unsigned();
			$table->boolean('category_id')->index('fk_film_category_category');
			$table->timestamp('last_update')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->primary(['film_id','category_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('film_category');
	}

}
