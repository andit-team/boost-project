<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyerCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyer_cards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('card_number');
            $table->string('card_holder_name');
            $table->date('card_expire_date');
            $table->string('card_cvc');
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
        Schema::dropIfExists('buyer_cards');
    }
}
