<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function(Blueprint $table)
        {
            $table->smallInteger('payment_id', true)->unsigned();
            $table->smallInteger('customer_id')->unsigned()->index('idx_fk_customer_id');
            $table->boolean('staff_id')->index('idx_fk_staff_id');
            $table->integer('rental_id')->nullable()->index('fk_payment_rental');
            $table->decimal('amount', 5);
            $table->dateTime('payment_date');
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('payment');
    }

}
