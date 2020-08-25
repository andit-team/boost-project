<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_trans', function (Blueprint $table) {
            $table->id();

            $table->date('date');
            $table->string('transaction_id');
            $table->string('payer_id');
            $table->string('payer_name');
            $table->string('payer_email');
            $table->decimal('paid_amount',8,2);
            $table->decimal('order_amount',8,2);
            $table->string('order_invoice');
            $table->unsignedBigInteger('user_id');
            
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_trans');
    }
}
