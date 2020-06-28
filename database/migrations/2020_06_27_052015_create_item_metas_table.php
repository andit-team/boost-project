<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_metas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('attr_label'); 
            $table->string('attr_value')->nullable();            
            $table->unsignedBigInteger('attribute_id');
            $table->unsignedBigInteger('item_id');
            $table->timestamps();
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade')->onUpdate('cascade'); 
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade')->onUpdate('cascade');      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_metas');
    }
}
