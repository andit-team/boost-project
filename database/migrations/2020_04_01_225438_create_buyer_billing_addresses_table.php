<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyerBillingAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyer_billing_addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('location')->nullable();
            $table->text('address');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('zip_code');
            $table->string('phone');
            $table->string('fax')->nullable();
            $table->boolean('active')->default(1)->change();
            $table->unsignedBigInteger('buyer_id')->default(1);
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
        Schema::dropIfExists('buyer_billing_addresses');
    }
}
