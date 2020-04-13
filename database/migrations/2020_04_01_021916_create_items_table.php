<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->decimal('price',8,2)->default(0);
            $table->string('model_no');
            $table->decimal('org_price',8,2)->default(0);
            $table->integer('pack_id');
            $table->integer('sorting');
            $table->text('description');
            $table->integer('min_order')->default(0);
            $table->enum('available_on',['Yes','No'])->default('Yes');
            $table->string('availability');
            $table->string('made_in');
            $table->string('materials');
            $table->string('labeled');
            $table->string('video_url');
            $table->integer('total_sale_amount');
            $table->integer('total_order_qty');
            $table->dateTime('last_ordered_at');
            $table->dateTime('last_carted_at');
            $table->integer('total_view');
            $table->dateTime('activated_at');
            $table->boolean('active')->default(1)->change();
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('items');
    }
}
