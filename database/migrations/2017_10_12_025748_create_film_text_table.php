<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilmTextTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('film_text', function(Blueprint $table)
		{
			$table->smallInteger('film_id')->primary();
			$table->string('title');
			$table->text('description', 65535)->nullable();
			$table->index(['title','description'], 'idx_title_description');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('film_text');
	}

}
