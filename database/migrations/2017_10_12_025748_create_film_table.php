<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('film', function(Blueprint $table)
		{
			$table->smallInteger('film_id', true)->unsigned();
			$table->string('title')->index('idx_title');
			$table->text('description', 65535)->nullable();
			$table->date('release_year')->nullable();
			$table->boolean('language_id')->index('idx_fk_language_id');
			$table->boolean('original_language_id')->nullable()->index('idx_fk_original_language_id');
			$table->boolean('rental_duration')->default(3);
			$table->decimal('rental_rate', 4)->default(4.99);
			$table->smallInteger('length')->unsigned()->nullable();
			$table->decimal('replacement_cost', 5)->default(19.99);
			$table->enum('rating', array('G','PG','PG-13','R','NC-17'))->nullable()->default('G');
			$table->simple_array('special_features')->nullable();
			$table->timestamp('last_update')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('film');
	}

}
