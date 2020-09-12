<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('invoice');
            $table->string('delivery_date');
            $table->string('delivery_frequency');
            $table->decimal('sub_total',8,2)->default(0.00);
            $table->decimal('discount',5,2)->default(0.00);
            $table->decimal('total',8,2)->default(0.00);
            $table->decimal('pay_amount',8,2)->default(0.00);
            $table->string('paypal_id')->nullable();
            $table->enum('order_status',['delivary','information','payment','overview','confirm'])->default('delivary');
            $table->enum('payment_status',['pending','complete','pertialy'])->default('pending');
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
        Schema::dropIfExists('orders');
    }
}
