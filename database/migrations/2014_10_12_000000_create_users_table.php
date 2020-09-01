<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('com_name')->nullable();
            $table->string('com_phone')->nullable();
            $table->string('com_address')->nullable();
            $table->string('com_vat')->nullable();
            $table->string('or_name')->nullable();
            $table->string('or_phone')->nullable();
            $table->string('or_address')->nullable();
            $table->string('or_reg')->nullable();
            $table->string('file_1')->nullable();
            $table->string('file_2')->nullable();
            $table->string('account')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('postcode')->nullable();
            $table->string('town')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();

            $table->enum('type',['customer','admin'])->default('customer');
            $table->text('permissions')->nullable();
            $table->timestamp('last_login')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->unique('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
