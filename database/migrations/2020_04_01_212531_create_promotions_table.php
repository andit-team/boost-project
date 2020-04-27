<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug')->nullable();
            $table->text('description');
            $table->enum('is_permanent',['Yes','No'])->default('Yes');
            $table->date('valid_from');
            $table->date('valid_to');
            $table->enum('has_coupon_code',['Yes','No'])->default('Yes');
            $table->string('coupon_code');
            $table->string('multiple_use')->nullable();
            $table->string('priority')->nullable();
            $table->boolean('active')->default(1)->change();
            $table->unsignedBigInteger('promotion_head_id');
            $table->unsignedBigInteger('user_id');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('promotion_head_id')->references('id')->on('promotion_heads')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('promotions');
    }
}
