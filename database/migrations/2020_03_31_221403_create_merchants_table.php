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
            $table->string('picture')->nullable();
            $table->string('email')->nullable();
            $table->date('dob')->nullable();
            $table->string('phone')->nullable();
            $table->enum('gender',['Male','Female','Other'])->default('Male');
            $table->text('description')->nullable();
            $table->text('rej_desc')->nullable();
            $table->date('last_visited_at')->nullable();
            $table->string('last_visited_from')->nullable();
            $table->string('verification_token')->nullable();
            $table->string('remember_token')->nullable();
            $table->enum('status',['Active','Inactive','Reject'])->default('Inactive');
            // $table->boolean('active')->default(1)->change();
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
