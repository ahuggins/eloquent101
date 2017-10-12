<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddressTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('address', function(Blueprint $table)
		{
			$table->smallInteger('address_id', true)->unsigned();
			$table->string('address', 50);
			$table->string('address2', 50)->nullable();
			$table->string('district', 20);
			$table->smallInteger('city_id')->unsigned()->index('idx_fk_city_id');
			$table->string('postal_code', 10)->nullable();
			$table->string('phone', 20);
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
		Schema::drop('address');
	}

}
