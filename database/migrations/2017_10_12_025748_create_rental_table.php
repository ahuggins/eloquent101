<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRentalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rental', function(Blueprint $table)
		{
			$table->integer('rental_id', true);
			$table->dateTime('rental_date');
			$table->integer('inventory_id')->unsigned()->index('idx_fk_inventory_id');
			$table->smallInteger('customer_id')->unsigned()->index('idx_fk_customer_id');
			$table->dateTime('return_date')->nullable();
			$table->boolean('staff_id')->index('idx_fk_staff_id');
			$table->timestamp('last_update')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->unique(['rental_date','inventory_id','customer_id'], 'rental_date');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rental');
	}

}
