<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyerShippingAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyer_shipping_addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('location');
            $table->text('address');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->integer('zip_code');
            $table->integer('phone');
            $table->string('fax');
            $table->boolean('active')->default(1)->change();
            $table->unsignedBigInteger('buyer_id');
            $table->unsignedBigInteger('user_id');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('buyer_id')->references('id')->on('buyers')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('buyer_shipping_addresses');
    }
}
