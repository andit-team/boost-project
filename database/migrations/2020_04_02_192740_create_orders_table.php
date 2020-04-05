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
            $table->increments('id');
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
            $table->unsignedInteger('buyer_id');
            $table->unsignedInteger('buyer_billing_address_id');
            $table->unsignedInteger('buyer_shipping_address_id');
            $table->unsignedInteger('buyer_card_id');
            $table->unsignedInteger('shipping_method_id');
            $table->unsignedInteger('user_id');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('buyer_id')->references('id')->on('buyers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('buyer_billing_address_id')->references('id')->on('buyer_billing_addresses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('buyer_shipping_address_id')->references('id')->on('buyer_shipping_addresses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('buyer_card_id')->references('id')->on('buyer_cards')->onDelete('cascade')->onUpdate('cascade');
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
