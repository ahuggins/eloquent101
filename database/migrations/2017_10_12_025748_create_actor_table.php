<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('actor', function(Blueprint $table)
		{
			$table->smallInteger('actor_id', true)->unsigned();
			$table->string('first_name', 45);
			$table->string('last_name', 45)->index('idx_actor_last_name');
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
		Schema::drop('actor');
	}

}
