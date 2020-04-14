<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->date('dob')->nullable();
            $table->enum('gender',['Male','Female','Other'])->default('Male');
            $table->text('description')->nullable();
            $table->date('last_visited_at')->nullable();;
            $table->string('last_visited_from')->nullable();;
            $table->string('verification_token')->nullable();;
            $table->string('remember_token')->nullable();;
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
        Schema::dropIfExists('buyers');
    }
}
