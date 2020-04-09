<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('item_id');
            $table->unsignedInteger('color_id');
            $table->integer('qty_stock');
            $table->unsignedInteger('size_id');
            $table->integer('sort');
            $table->string('available_on');
            $table->boolean('active')->default(1)->change();
            $table->unsignedInteger('user_id');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('size_id')->references('id')->on('sizes')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('inventories');
    }
}
