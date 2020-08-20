<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      //Schema::dropIfExists('customers');
      Schema::create('customers', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->unsignedBigInteger('user_id');
           $table->string('first_name')->nullable();
           $table->string('last_name')->nullable();
           $table->string('phone')->nullable();
           $table->string('picture')->nullable();
           $table->string('com_name')->nullable();
           $table->string('com_phone')->nullable();
           $table->string('com_address')->nullable();
           $table->string('com_vat')->nullable();
           $table->string('or_name')->nullable();
           $table->string('or_phone')->nullable();
           $table->string('or_address')->nullable();
           $table->string('or_reg')->nullable();
           $table->string('image')->nullable();
           $table->string('account')->nullable();
           $table->string('address_1')->nullable();
           $table->string('address_2')->nullable();
           $table->string('town')->nullable();
           $table->date('dob')->nullable();
           $table->enum('gender',['Male','Female','Other'])->nullable();
           $table->text('description')->nullable();
           $table->date('last_visited_at')->nullable();
           $table->string('last_visited_from')->nullable();
           $table->string('verification_token')->nullable();
           $table->string('remember_token')->nullable();
           $table->boolean('active')->default(1)->change();
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
        Schema::dropIfExists('customers');
    }
}
