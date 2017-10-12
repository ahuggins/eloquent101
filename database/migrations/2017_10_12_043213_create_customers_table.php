<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function(Blueprint $table)
		{
			$table->smallInteger('id', true)->unsigned();
			$table->boolean('store_id')->index('idx_fk_store_id');
			$table->string('first_name', 45);
			$table->string('last_name', 45)->index('idx_last_name');
			$table->string('email', 50)->nullable();
			$table->smallInteger('address_id')->unsigned()->index('idx_fk_address_id');
			$table->boolean('active')->default(1);
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
		Schema::drop('customers');
	}

}
