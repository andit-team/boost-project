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
            $table->integer('order_number');
            $table->string('invoice_number');
            $table->string('tracking_number');
            $table->decimal('subtotal',8,2)->default(0);
            $table->decimal('discount',8,2)->default(0);
            $table->decimal('shipping_cost',8,2)->default(0);
            $table->decimal('grand_total',8,0)->default(0);
            $table->text('admin_note');
            $table->string('shipping_track');
            $table->dateTime('confirm_at');
            $table->dateTime('back_ordered_at');
            $table->dateTime('cancel_at');
            $table->enum('status',['Active','Voided'])->default('Active');
            $table->boolean('active')->default(1)->change();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('customer_billing_address_id');
            $table->unsignedBigInteger('customer_shipping_address_id');
            $table->unsignedBigInteger('customer_card_id');
            $table->unsignedBigInteger('shipping_method_id');
            $table->unsignedBigInteger('user_id');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('customer_billing_address_id')->references('id')->on('customer_billing_addresses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('customer_shipping_address_id')->references('id')->on('customer_shipping_addresses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('customer_card_id')->references('id')->on('customer_cards')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('shipping_method_id')->references('id')->on('shipping_methods')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('orders');
    }
}
