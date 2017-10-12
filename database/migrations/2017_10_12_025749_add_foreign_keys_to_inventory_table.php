<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInventoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('inventory', function(Blueprint $table)
		{
			$table->foreign('film_id', 'fk_inventory_film')->references('film_id')->on('film')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('store_id', 'fk_inventory_store')->references('store_id')->on('store')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('inventory', function(Blueprint $table)
		{
			$table->dropForeign('fk_inventory_film');
			$table->dropForeign('fk_inventory_store');
		});
	}

}
