<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('slug')->nullable(); 
            $table->string('shop_name'); 
            $table->string('email')->nullable(); 
            $table->string('phone_number')->nullable(); 
            $table->string('vat');
            $table->string('post_code');
            $table->string('city');
            $table->string('address_1');
            $table->string('address_2');
            $table->string('county');
            $table->string('fax');
            $table->string('merchant_file')->nullable();
            $table->enum('status',['Active','Inactive','Reject'])->default('Inactive'); 
            $table->unsignedBigInteger('user_id')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('merchants');
    }
}
