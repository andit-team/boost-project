<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_cards', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('card_number');
            $table->string('mmyy');
            $table->integer('cc');
            $table->integer('postCode');
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->string('town');
            $table->string('subcription')->nullable();
            $table->string('aggredTc')->nullable();
            $table->string('sameAsShipping')->nullable();
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
        Schema::dropIfExists('payment_cards');
    }
}
