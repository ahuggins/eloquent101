<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStoreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('store', function(Blueprint $table)
		{
			$table->boolean('store_id')->primary();
			$table->boolean('manager_staff_id')->unique('idx_unique_manager');
			$table->smallInteger('address_id')->unsigned()->index('idx_fk_address_id');
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
		Schema::drop('store');
	}

}
