<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStoreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('store', function(Blueprint $table)
		{
			$table->foreign('address_id', 'fk_store_address')->references('address_id')->on('address')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('manager_staff_id', 'fk_store_staff')->references('staff_id')->on('staff')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('store', function(Blueprint $table)
		{
			$table->dropForeign('fk_store_address');
			$table->dropForeign('fk_store_staff');
		});
	}

}
