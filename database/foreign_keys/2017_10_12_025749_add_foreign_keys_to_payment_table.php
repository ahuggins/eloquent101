<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPaymentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('payment', function(Blueprint $table)
		{
			$table->foreign('customer_id', 'fk_payment_customer')->references('customer_id')->on('customer')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('rental_id', 'fk_payment_rental')->references('rental_id')->on('rental')->onUpdate('CASCADE')->onDelete('SET NULL');
			$table->foreign('staff_id', 'fk_payment_staff')->references('staff_id')->on('staff')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('payment', function(Blueprint $table)
		{
			$table->dropForeign('fk_payment_customer');
			$table->dropForeign('fk_payment_rental');
			$table->dropForeign('fk_payment_staff');
		});
	}

}
