<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStaffTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('staff', function(Blueprint $table)
		{
			$table->foreign('address_id', 'fk_staff_address')->references('address_id')->on('address')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('store_id', 'fk_staff_store')->references('store_id')->on('store')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('staff', function(Blueprint $table)
		{
			$table->dropForeign('fk_staff_address');
			$table->dropForeign('fk_staff_store');
		});
	}

}
