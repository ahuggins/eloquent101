<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStaffTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('staff', function(Blueprint $table)
		{
			$table->boolean('id')->primary();
			$table->string('first_name', 45);
			$table->string('last_name', 45);
			$table->smallInteger('address_id')->unsigned()->index('idx_fk_address_id');
			$table->binary('picture', 65535)->nullable();
			$table->string('email', 50)->nullable();
			$table->boolean('store_id')->index('idx_fk_store_id');
			$table->boolean('active')->default(1);
			$table->string('username', 16);
			$table->string('password', 40)->nullable();
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
		Schema::drop('staff');
	}

}
