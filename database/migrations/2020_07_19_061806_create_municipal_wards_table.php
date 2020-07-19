<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipalWardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipal_wards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('municipal_id');
            $table->string('name');
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->timestamps();
            $table->foreign('municipal_id')->references('id')->on('municipals')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municipal_wards');
    }
}
