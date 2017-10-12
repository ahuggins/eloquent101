<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRentalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('rental', function(Blueprint $table)
		{
			$table->foreign('customer_id', 'fk_rental_customer')->references('customer_id')->on('customer')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('inventory_id', 'fk_rental_inventory')->references('inventory_id')->on('inventory')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('staff_id', 'fk_rental_staff')->references('staff_id')->on('staff')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('rental', function(Blueprint $table)
		{
			$table->dropForeign('fk_rental_customer');
			$table->dropForeign('fk_rental_inventory');
			$table->dropForeign('fk_rental_staff');
		});
	}

}
