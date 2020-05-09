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
            $table->string('email')->nullable();
            $table->string('image')->nullable();
            $table->string('slug');
            $table->string('sub_category');
            $table->decimal('price',8,2)->default(0);
            $table->string('model_no');
            $table->decimal('org_price',8,2)->default(0);
            $table->integer('pack_id');
            $table->integer('sorting')->nullable();
            $table->text('description');
            $table->text('rej_desc')->nullable();
            $table->integer('min_order')->default(0);
            $table->enum('available_on',['Yes','No'])->default('Yes');
            // $table->string('availability');
            $table->string('made_in');
            $table->string('materials');
            $table->string('labeled');
            $table->string('video_url')->nullable();
            $table->integer('total_sale_amount')->nullable();
            $table->integer('total_order_qty');
            $table->dateTime('last_ordered_at');
            $table->dateTime('last_carted_at');
            $table->integer('total_view')->nullable();
            $table->dateTime('activated_at')->nullable();
            $table->boolean('active')->default(1)->change();
            $table->enum('status',['Active','Inactive'])->default('Inactive');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('shop_id')->nullable();
            $table->unsignedBigInteger('category_id'); 
            $table->unsignedBigInteger('tag_id');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade'); 
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade')->onUpdate('cascade'); 
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
