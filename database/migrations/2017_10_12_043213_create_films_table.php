<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilmsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('films', function(Blueprint $table)
		{
			$table->smallInteger('id', true)->unsigned();
			$table->string('title', 191)->index('idx_title');
			$table->text('description', 65535)->nullable();
			$table->string('release_year', 191)->nullable();
			$table->boolean('language_id')->index('idx_fk_language_id');
			$table->boolean('original_language_id')->nullable()->index('idx_fk_original_language_id');
			$table->boolean('rental_duration')->default(3);
			$table->decimal('rental_rate', 4)->default(4.99);
			$table->smallInteger('length')->unsigned()->nullable();
			$table->decimal('replacement_cost', 5)->default(19.99);
			$table->enum('rating', array('G','PG','PG-13','R','NC-17'))->nullable()->default('G');
			$table->text('special_features', 65535)->nullable();
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
		Schema::drop('films');
	}

}
