<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('code')->nullable();
            $table->unsignedBigInteger('agentship_plan')->nullable();
            $table->string('phone')->nullable();
            $table->date('dob')->nullable();
            $table->enum('gender',['Male','Female','Other'])->default('Male');
            $table->string('slug')->nullable();
            $table->string('picture')->nullable();
            $table->string('email')->nullable();
            $table->string('division')->nullable();
            $table->string('district')->nullable();
            $table->string('upazilla')->nullable();
            $table->string('union')->nullable();
            $table->string('village')->nullable();
            $table->string('ward')->nullable();
            $table->string('lat')->nullable();
            $table->string('lang')->nullable();
            $table->string('nid')->nullable();
            $table->string('nid_img')->nullable();
            $table->text('description')->nullable();
            $table->text('rej_desc')->nullable();
            $table->date('last_visited_at')->nullable();
            $table->string('last_visited_from')->nullable();
            $table->string('verification_token')->nullable();
            $table->string('remember_token')->nullable();
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
        Schema::dropIfExists('agents');
    }
}
